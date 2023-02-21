@if(session()->has("message"))
    <div x-data="{show:true}"
         x-init="setTimeout(()=>show=false,4000)"
         x-show="show"
         class="fixed bg-spGreen text-black ease-in duration-300 py-2 px-4 rounded-xl bottom-3 right-3 text-sm shadow ">
        <p> {{ session("message") }}</p>
    </div>
@endif

