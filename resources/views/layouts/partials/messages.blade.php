@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-success text-success text-sm px-4 mb-4" role="alert">
                <i class="fa fa-check-circle-o me-2"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-success text-success text-sm px-4 mb-4" role="alert">
            <i class="fa fa-check-circle-o me-2"></i>
            {{ $data }}
        </div>
    @endif
@endif