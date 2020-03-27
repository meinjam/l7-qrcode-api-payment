<div class="col-md-12">
    <a href="{{ route('qrcodes.index') }}" class="btn btn-default">Back</a>
    @if ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
        <a href="{{ route('qrcodes.edit', [$qrcode->id]) }}" class='btn btn-primary'>Edit</a>
    @endif
</div>
<div class="col-md-6">
    <!-- Product Name Field -->
    <div class="form-group">
        {{-- {!! Form::label('product_name', 'Product Name:') !!} --}}
        <h3>{{ $qrcode->product_name }} 
            <br>
            @if (isset($qrcode->company_name))
                <small>by {{ $qrcode->company_name }}</small>
            @endif
        </h3>
    </div>

    <!-- Amount Field -->
    <div class="form-group">
        {{-- {!! Form::label('amount', 'Amount:') !!} --}}
        <h4>Amount: ${{ $qrcode->amount }}</h4>
    </div>

    <!-- Product Url Field -->
    <div class="form-group">
        {!! Form::label('product_url', 'Product Url:') !!}
        <p><a href="{!! $qrcode->product_url !!}" target="_blank">{{ $qrcode->product_url }}</a></p>
    </div>
    
    @if ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
        <!-- User Id Field -->
        <div class="form-group">
            {!! Form::label('user_id', 'User Id:') !!}
            <p>{{ $qrcode->user_id }}</p>
        </div>
        
        <!-- Website Field -->
        <div class="form-group">
            {!! Form::label('website', 'Website:') !!}
            <p>{{ $qrcode->website }}</p>
        </div>
        
        <!-- Company Name Field -->
        <div class="form-group">
            {!! Form::label('company_name', 'Company Name:') !!}
            <p>{{ $qrcode->company_name }}</p>
        </div>
        
        <!-- Callback Url Field -->
        <div class="form-group">
            {!! Form::label('callback_url', 'Callback Url:') !!}
            <p>{{ $qrcode->callback_url }}</p>
        </div>
        
        <!-- Status Field -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            <p>
                @if ($qrcode->status == 1)
                    Active
                @else
                    Inactive
                @endif
                {{-- {{ $qrcode->status }} --}}
            </p>
        </div>
        
    @endif
</div>
<div class="col-md-6">
    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Scan qrcode and pay with our app:') !!}
        <p><img src="{{ asset($qrcode->qrcode_path) }}" alt=""></p>
    </div>
</div>
