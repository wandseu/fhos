<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getIndex() 
	{
		return view('pages.home.index');
	}

	public function getWomen() 
	{
		return view('pages.women.index');
	}

	public function getWomenMenu() 
	{
		return view('pages.women.menu.index');
	}

	public function getPreview() 
	{
		return view('pages.preview.index');
	}

	public function getCart() 
	{
		return view('pages.cart.index');
	}

	public function getWishlist() 
	{
		return view('pages.wishlist.index');
	}

	public function getCheckout() 
	{
		return view('pages.checkout.index');
	}

	public function getPayment() 
	{
		return view('pages.payment.index');
	}

	public function getReview() 
	{
		return view('pages.review.index');
	}

	public function getCustomerService() 
	{
		return view('pages.customerservice.index');
	}

	public function getPaymentMethod() 
	{
		return view('pages.customerservice.paymentmethod');
	}

	public function getConfirmPayment() 
	{
		return view('pages.customerservice.confirmpayment');
	}

	public function getCourierList() 
	{
		return view('pages.customerservice.courierlist');
	}

	public function getTrackOrder() 
	{
		return view('pages.account.trackOrder.index');
	}
}

?>