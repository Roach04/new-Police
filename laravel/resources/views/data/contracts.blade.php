@extends('layout.syntax')

@section('content')

@include('layout.contractsNav')
	
	<div class="container" style="margin-top:160px">

		{!! Form::open(['route' => ['storeContracts', $contract->id], 'method' => 'post'] ) !!}
			<h1 class="pull-left" style="color:#f44336"> <i class="fa fa-user fa-2x"> </i> Contract. </h1> <br><br><br>

			<div style="margin-top:70px" class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('assetPrice') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('assetPrice', 'Purchase Price of the Asset', ['class' => 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::text('assetPrice', null, ['class'=> 'form-control', 'placeholder'=> 'Purchase Price of the Asset.'])!!}
					</div><br>

					<!-- VALIDATION.. -->
                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('assetPrice'))
                            {{ $errors->first('assetPrice') }}
                        @endif
                    </div>
				</div>
			</div><br><br>

			<div class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('deposit') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('deposit', 'Deposit.', ['class' => 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::number('deposit', null, ['class'=> 'form-control', 'placeholder'=> 'Deposit.'])!!}
					</div><br>

					<!-- VALIDATION.. -->
                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('deposit'))
                            {{ $errors->first('deposit') }}
                        @endif
                    </div> 
				</div>
			</div><br><br>

			<div class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('term') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('term', 'Term.', ['class'=> 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::text('term', null, ['class'=> 'form-control', 'placeholder'=> 'Term.'])!!}
					</div><br>

					<!-- VALIDATION.. -->
                    <div style="font:bold 20px calibri; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('term'))
                            {{ $errors->first('term') }}
                        @endif
                    </div> 
				</div>
			</div><br><br>

			<div class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('paymentPeriod') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('paymentPeriod', 'Payment Period.', ['class'=> 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::select('paymentPeriod', [
								   'Monthly.'  => 'Monthly.',
								   'Quaterly.' => 'Quaterly.',
								   'Half Yearly.'     => 'Half Yearly.'], null, array('class' => 'form-control'
								)) !!}
					</div><br>
                        
                    <!-- VALIDATION.. -->
                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('paymentPeriod'))
                            {{ $errors->first('paymentPeriod') }}
                        @endif
                    </div> 
				</div>
			</div><br><br>

			<div class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('purchaseInstallment') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('purchaseInstallment', 'Purchase Installment.', ['class'=> 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::number('purchaseInstallment', null, ['class'=> 'form-control', 'placeholder'=> 'Purchase Installment.'])!!}
					</div><br>
                        
                    <!-- VALIDATION.. -->
                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('purchaseInstallment'))
                            {{ $errors->first('purchaseInstallment') }}
                        @endif
                    </div> 
				</div>
			</div><br><br>

			<div class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('commencementDate') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('commencementDate', 'Commencement Date.', ['class'=> 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::date('commencementDate', null, ['class'=> 'form-control', 'placeholder'=> 'Date the Asset is delivered to the Client.'])!!}
					</div><br>
                        
                    <!-- VALIDATION.. -->
                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('commencementDate'))
                            {{ $errors->first('commencementDate') }}
                        @endif
                    </div> 
				</div>
			</div><br><br>

			<div class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('firstInstallmentDate') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('firstInstallmentDate', 'First Purchase Installment Date.', ['class'=> 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::date('firstInstallmentDate', null, ['class'=> 'form-control', 'value' => '{{ old(firstInstallmentDate) }} ', 'placeholder'=> 'First Installment Date.'])!!}
					</div><br>

					<!-- VALIDATION.. -->
                    <div style="font:bold 20px calibri; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('firstInstallmentDate'))
                            {{ $errors->first('firstInstallmentDate') }}
                        @endif
                    </div> 
				</div>
			</div><br><br>

			<div class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('overdueInstallment') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('overdueInstallment', '% Penalty of the overdue purchase installment.', ['class'=> 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::text('overdueInstallment', null, ['class'=> 'form-control', 'placeholder'=> '% Overdue Installment.'])!!}
					</div><br>
                        
                    <!-- VALIDATION.. -->
                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('overdueInstallment'))
                            {{ $errors->first('overdueInstallment') }}
                        @endif
                    </div> 
				</div>
			</div><br><br>

			<div class="row">
				<div class="form-group col-sm-7 col-sm-offset-2 {{ $errors->has('terminationDate') ? 'has-error' : '' }}" style="font:bold 28px bradley hand itc">
					{!! Form::label('terminationDate', 'Expected Termination Date.', ['class'=> 'control-label']) !!}
					<br>
					<div style="font:bold 38px book antiqua">
						{!! Form::date('terminationDate', null, ['class'=> 'form-control','placeholder' => 'Termination Date.' ])!!}
					</div><br>

					<!-- VALIDATION.. -->
                    <div style="font:bold 20px book antiqua; color:#f44336" class="col-sm-offset-4">
                        @if($errors->has('terminationDate'))
                            {{ $errors->first('terminationDate') }}
                        @endif
                    </div> 
				</div>
			</div><br><br>

			<div class="row">
                <div class="form-group " style="font:bold 20px arial">
                    <div class="col-sm-7 col-sm-offset-2">    
                        {!! Form::submit('Register A New Contract.', ['class' => 'btn btn-primary btn-block', 'style' => 'font:bold 24px bradley hand itc']) !!}
                    </div> <br><br>
                </div>
            </div> <br>

            <div class="row">
                <div class="form-group" style="font:bold 20px arial">
                    <div class="col-sm-7 col-sm-offset-2">                  
                        {!! Form::reset('Erase The Contract\'s Input.', ['style' => 'font:bold 24px bradley hand itc', 'class' => 'btn btn-danger btn-block']) !!}
                    </div>
                </div>
            </div> <br>
		{!! Form::close() !!}		
	</div>
@stop