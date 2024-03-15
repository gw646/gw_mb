@extends('admin.layouts.app')

@section('title', 'Online Payment System')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Online Payment System</li>
                    </ol>
                </div>
                <h4 class="page-title">Online Payment System</h4>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Annual Membership Fee</h5>
                    <p>Please choose your plan and proceed to payment.</p>

                   
                        <div class="form-group">
                            <label for="plan">Payment Option</label>
                            <select class="form-control" id="plan" name="plan">
                                <option value="monthly">Monthly - $100</option>
                                <option value="yearly">Yearly - $1200</option>
                            </select>
                        </div>
                        </br>

                        <div class="form-group">
                            <label for="email">Confirm Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        </br>

                        <a href="https://goldan.xyz/bk/mbtt/public/user/payinvoice" style="text-decoration: none;">
                        <!-- This button might redirect to a bank's hosted payment page or pop up a payment form -->
                        <button type="submit" class="btn btn-primary">Proceed to Payment</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
