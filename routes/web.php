<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminCOntroller;
use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\Admin\SubcatagoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ReturnOrderController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontendProductController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\FbController;
use App\Http\Controllers\ReviewController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Frontend


Auth::routes();

Route::get('/',[FrontendController::class,'index']);
//User 
Route::get('/user_dashboard',[FrontendController::class,'dashboard']);
Route::get('/order_details/{id}',[FrontendController::class,'orderdetails']);
Route::post('/then',[FrontendController::class,'update_password'])->name('user.updatepassword');





//Return Products//
Route::get('/return_product/{id}',[FrontendController::class,'returnproduct']);
Route::get('/return_orders',[FrontendController::class,'requestreturn']);









// Order Tracking//
Route::get('/order',[FrontendController::class,'ordertracking']);
Route::post('/tho',[FrontendController::class,'orderchecking'])->name('user.orderstatus');

//Shop page//
Route::get('/shop_page',[FrontendProductController::class,'shoppage']);
//Search Page
Route::post('/searchajax',[FrontendController::class,'searchautocomplete'])->name('serachproductajax');

//Review and Rating//

Route::post('/review',[ReviewController::class,'reviewandrating'])->name('user.review');

//Brand Shop//
Route::get('/frontend_brand',[BrandController::class,'showbrand']);
Route::get('/brand_page/{id}',[BrandController::class,'brand_wise']);




//cart//

Route::get('add/to/product/{id}',[CartController::class,'addcart']);
Route::get('/cart',[CartController::class,'show_cart'])->name('user.cart');
Route::get('remove/cart/{rowId}',[CartController::class,'delete_cart']);
Route::post('/order_items',[CartController::class,'order'])->name('user.details');
Route::post('/update_items',[CartController::class,'CartIncrement'])->name('update.cart');
Route::get('/fetch_data',[CartController::class,'fetchcart']);

//Checkout//

Route::get('/check',[CartController::class,'checkout'])->name('user.checkout');
Route::post('/applycoupon',[CartController::class,'coupon'])->name('apply.coupon');
Route::post('/applycoupon',[CartController::class,'coupon'])->name('apply.coupon');
Route::get('/sucess',[CartController::class,'order_completed'])->name('order.completed');





// Single Product//
Route::get('/single_product/{pro_id}',[FrontendProductController::class,'index']);
Route::post('add/to/singleproduct/{id}',[FrontendProductController::class,'addtocart']);


//Catagoty wish Product//
Route::get('/subcatagory_product/{sub_id}',[FrontendProductController::class,'subcatagory_wise']);
Route::get('/catagory_product/{catpro_id}',[FrontendProductController::class,'catagory_wise']);


//social//

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);

//contact//

Route::get('/contact',[FrontendController::class,'contact'])->name('user.contact');
Route::post('/add_contact',[FrontendController::class,'addcontactdata'])->name('userfrom.contact');
Route::get('/admin_contact',[FrontendController::class,'admincontact'])->name('admin.show_contact');



Route::get('/redirect',[AdminCOntroller::class,'redirect']);
//Admin //
Route::get('/dashboard',[AdminCOntroller::class,'index'])->name('admin.dashboard');
//catagory//
Route::get('/catagory',[CatagoryController::class,'catagory'])->name('admin.catagory');
Route::post('/add_catagory',[CatagoryController::class,'add_catagory'])->name('add.catagory');
Route::post('/update_catagory',[CatagoryController::class,'update_catagory'])->name('update.catagory');
Route::get('delete/{cat_id}',[CatagoryController::class,'delete']);
//Sub Catagoty//
Route::get('/sub_catagory',[SubcatagoryController::class,'subcatagory'])->name('admin.subcatagory');
Route::post('/add_subcatagory',[SubcatagoryController::class,'addsubcatagory'])->name('add.subcatagory');
Route::get('subdelete/{subcat_id}',[SubcatagoryController::class,'sub_delete']);
Route::post('/sub_update',[SubcatagoryController::class,'update_subcatagory'])->name('update.subcatagory');

//Brand//
Route::get('/brand',[BrandController::class,'brand'])->name('admin.brand');
Route::post('/add_brand',[BrandController::class,'add_brand'])->name('add.brand');
Route::get('brand/delete/{brand_id}',[BrandController::class,'brand_delete']);

//Coupon//
Route::get('/coupon',[CouponController::class,'coupon'])->name('admin.coupon');
Route::post('/add_coupon',[CouponController::class,'addCoupon'])->name('add.coupon');
Route::post('/update_coupon',[CouponController::class,'update_coupon'])->name('update_coupon');
Route::get('Coupon/delete/{Coupon_id}',[CouponController::class,'coupon_delete']);
//ajax sub//

Route::get('/get/subcategory/{catgory_id}',[ProductController::class,'getsub']);

//product//

Route::get('/all product',[ProductController::class,'index'])->name('all.product');
Route::post('store_product',[ProductController::class,'store'])->name('product.store');
Route::get('/show',[ProductController::class,'show_products'])->name('show.all.product');
Route::get('inactive/product/{id}',[ProductController::class,'inactive_product']);
Route::get('active/product/{id}',[ProductController::class,'active_product']);
Route::get('product/delete/{delete_id}',[ProductController::class,'product_delete']);
Route::get('view/product/{view_id}',[ProductController::class,'viewproduct']);
Route::get('edit/product/{edit_id}',[ProductController::class,'editproduct']);
Route::post('update/product/withoutphote/{pro_id}',[ProductController::class,'Updateproductwithoutphote']);



// Admin Order//

Route::get('admin/order',[OrderController::class,'pending_order'])->name('admin.order');
Route::get('/xxxx/{id}/{order_id}',[OrderController::class,'vieworder'])->name('show.order');
Route::get('/admin/accept/{acc_id}',[OrderController::class,'accept_order']);
Route::get('/cancel/{cancel_id}',[OrderController::class,'cancel_order']);
Route::get('/accept',[OrderController::class,'acceptorder'])->name('admin.accept.order');
Route::get('/rrrr/{id}/{order_id}',[OrderController::class,'viewacceptorder'])->name('admin.view.accept');
Route::get('/delivery/accept/{de_id}',[OrderController::class,'accept_deliveryorder']);
Route::get('/delivery_man',[OrderController::class,'deliverymanorder'])->name('admin.delivery.order');
Route::get('/hym/{id}/{order_id}',[OrderController::class,'viewdeliveryacceptorder'])->name('admin.deliveryman.accept');
Route::get('/deliveryed/accept/{completed_id}',[OrderController::class,'completedorder']);
Route::get('lol/order',[OrderController::class,'scuccesorder'])->name('admin.success.order');
Route::get('/rttt/{id}/{order_id}',[OrderController::class,'viewsuccedorder'])->name('admin.viewsucced.accept');
Route::get('/cancel_order',[OrderController::class,'cancelorder'])->name('admin.cancel.order');


//Order Report//

Route::get('/admin/today',[ReportController::class,'todayorder'])->name('admin.today.order');
Route::get('/admin/today_delivery',[ReportController::class,'todaydeliveryorder'])->name('admin.today.deliveryorder');
Route::get('/admin/today_month',[ReportController::class,'Thismonth'])->name('admin.today.thismonthorder');
Route::get('/admin/search_report',[ReportController::class,'search'])->name('admin.search_report');
Route::post('admin/search_year',[ReportController::class,'searchbyyear'])->name('year.report');
Route::post('admin/search_month',[ReportController::class,'searchbymonth'])->name('month.report');
Route::post('admin/date_month',[ReportController::class,'searchbydate'])->name('date.report');

//Return Order//
Route::get('/admin/return',[ReturnOrderController::class,'return_product'])->name('admin.return.product');
Route::get('/lolol/{id}',[ReturnOrderController::class,'approve_product']);
Route::get('/admin/all_request',[ReturnOrderController::class,'return_allorder'])->name('admin.return.allproduct');


//Site Settings//
Route::get('/admin/site',[AdminCOntroller::class,'site'])->name('admin.setup.site');
Route::post('admin/site_information',[AdminCOntroller::class,'update_sitedata'])->name('admin.update.site');








