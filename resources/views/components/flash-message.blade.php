@if(session()->has('message'))
    <div  x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="message">
        {{session('message')}}
    </div>
@endif