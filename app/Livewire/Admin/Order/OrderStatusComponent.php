<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class OrderStatusComponent extends Component
{
    use WithPagination;
    public $pagesize;
    public $searchTerm;
	public $data;
	public $delivaryStatus;
    public $startDate;
    public $endDate;
    public  $export;
    protected $rules = [
        'startDate' => 'required|date',
        'endDate' => 'required|date|after_or_equal:startDate',
    ];


    public function updateOrderStatus($order_id,$status)
	{
	$order = Order::find($order_id);
	$order->status = $status;
	if($status == "delivered")
	{  
		$order->delivered_date = DB::raw('CURRENT_DATE');
	}
	else if($status == "canceled")
	{
		$order->canceled_date = DB::raw('CURRENT_DATE');
	}
	else if($status == "confirmed")
	{
		$order->confirmed_date = DB::raw('CURRENT_DATE');
	}
	$order->save();
	session()->flash('order_message','Order status has been updated successfully!');

	}

    public function fetchData()
    {
        $this->validate([
            'startDate' => 'nullable|date',
            'endDate' => 'nullable|date|after_or_equal:startDate',
        ]);
    
        $query = Order::query();
    
        if (!empty($this->startDate)) {
            $query->where('created_at', '>=', $this->startDate . ' 00:00:00');
        }
    
        if (!empty($this->endDate)) {
            $query->where('created_at', '<=', $this->endDate . ' 23:59:59');
        }
    
        $this->data = $query->get();
    
        if ($this->export) {
            // Export to Excel
            return Excel::download(new OrderExport($this->data), 'orders.xlsx');
        } else {
            // Return a view to display the data
            return view('livewire.admin.order.order-status-component', ['orders' => $this->data]);
        }
    }
    public function notification($orderId)
        {
            $order = Order::find($orderId);
            
            // if ($order) {
            //     $order->notification = $order->notification == 0 ? 0 : 0;
            //     $order->save();
            // }
            return redirect()->route('admin.orderDetails', ['order_id' => $orderId]);
        }
    
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        if ($data = $this->delivaryStatus == 1) {
            $orders = Order::select('*')
                ->where('status', '=', 'ordered')
                ->orderBy('id', 'desc')->paginate($this->pagesize);
            
        }
		else if ($data = $this->delivaryStatus == 2) {
            $orders = Order::select('*')
                ->where('status', '=', 'confirmed')
                ->orderBy('id', 'desc')->paginate($this->pagesize);    
        }
		else if ($data = $this->delivaryStatus == 3) {    
            $orders = Order::select('*')
                ->where('status', '=', 'shipped')
                ->orderBy('id', 'desc')->paginate($this->pagesize);  
        }
		else if ($data = $this->delivaryStatus == 4) {    
            $orders = Order::select('*')
                ->where('status', '=', 'canceled')
                ->orderBy('id', 'desc')->paginate($this->pagesize);    
        }
		else if ($data = $this->delivaryStatus == 5) {   
            $orders = Order::select('*')
                ->where('status', '=', 'return')
                ->orderBy('id', 'desc')->paginate($this->pagesize);   
        }
		else if ($data = $this->delivaryStatus == 6) {    
            $orders = Order::select('*')
                ->where('status', '=', 'on hold')
                ->orderBy('id', 'desc')->paginate($this->pagesize);    
        }
		else {
			// If $order_id is not set, use the previous search conditions
			$orders = Order::where('firstname', 'like', $searchTerm)
				// ->orWhere('order_id', 'like', $order_id)  
				->orWhere('lastname', 'like', $searchTerm)
				->orWhere('phone', 'like', $searchTerm)
				->orWhere('email', 'like', $searchTerm)
				->orWhere('status', 'like', $searchTerm)
				->orderBy('created_at', 'DESC')
				->paginate($this->pagesize);
		}
        return view('livewire.admin.order.order-status-component',['orders'=>$orders])->layout('layouts.admin');;
    }
}
