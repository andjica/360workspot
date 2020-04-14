<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

use App\Account;
use App\Purchase;

class PaymentController extends Controller
{
    private $_api_context;
    // private $price_pro;
    // private $price_super;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    public function paypro(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Upgraded account to Super - Pro')
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice('420.00'); 

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal('420.00');

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Upgrading your account to Super - Pro at 360WorkSpot website');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status-pro'))
            ->setCancelUrl(URL::to('status-pro'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
           
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/home');

            } else {

                \Session::put('error', 'Some error occured, sorry for inconvenience');
                return Redirect::to('/home');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/home');

    }

    public function getPaymentStatusPro()
    {
        
        $payment_id = Session::get('paypal_payment_id');

       
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/home');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

   
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            \Session::put('success', 'Payment success, you upgraded your account to Super - Pro');
            
            $user_account = Account::where('user_id',auth()->user()->id)->first();
            $user_account->account_type_id = 2;
            $user_account->valid_until = \Carbon\Carbon::now()->addMonth(3);
            $user_account->save();

            Purchase::create([
                'user_id' => auth()->user()->id,
                'acc_type_id' => '2',
                'price' => 420,
                'date_of_purchase' => \Carbon\Carbon::now(),
                'valid_until' => \Carbon\Carbon::now()->addMonth(2)
            ]);

            return Redirect::to('/home');

        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/home');
    }


    //Account type 3 - Professional 

    public function payprofessional(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Upgraded account to Professional')
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice('2400.00'); 

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal('2400.00');

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Upgrading your account to Professional at 360WorkSpot website');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status-professional'))
            ->setCancelUrl(URL::to('status-professional'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
           
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/home');

            } else {

                \Session::put('error', 'Some error occured, sorry for inconvenience');
                return Redirect::to('/home');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/home');
    }

    public function getPaymentStatusProfessional()
    {
        $payment_id = Session::get('paypal_payment_id');

        
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/home');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            \Session::put('success', 'Payment success, you upgraded account to Professional');
            
            $user_account = Account::where('user_id',auth()->user()->id)->first();
            $user_account->account_type_id = 3;
            $user_account->valid_until = \Carbon\Carbon::now()->addMonth(6);
            $user_account->save();

            Purchase::create([
                'user_id' => auth()->user()->id,
                'acc_type_id' => '3',
                'price' => 2400,
                'date_of_purchase' => \Carbon\Carbon::now(),
                'valid_until' => \Carbon\Carbon::now()->addMonth(1)
            ]);

            return Redirect::to('/home');

        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/home');
    }


    //Account type 4
    public function payexclusive()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Upgraded account to Exclusive')
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice('7200.00'); 

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal('7200.00');

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Upgrading your account to Exclusive at 360WorkSpot website');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status-excl'))
            ->setCancelUrl(URL::to('status-excl'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
           
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/home');

            } else {

                \Session::put('error', 'Some error occured, sorry for inconvenience');
                return Redirect::to('/home');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

      
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/home');
    }

    public function getPaymentStatusExclusive()
    {
        
        $payment_id = Session::get('paypal_payment_id');

        
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/home');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            \Session::put('success', 'Payment success, you upgraded your account to Exclusive');
            
            $user_account = Account::where('user_id',auth()->user()->id)->first();
            $user_account->account_type_id = 4;
            $user_account->valid_until = \Carbon\Carbon::now()->addMonth(12);
            $user_account->save();

            Purchase::create([
                'user_id' => auth()->user()->id,
                'acc_type_id' => '4',
                'price' => 7200,
                'date_of_purchase' => \Carbon\Carbon::now(),
                'valid_until' => \Carbon\Carbon::now()->addMonth(12)
            ]);

            return Redirect::to('/home');

        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/home');

    }

}

