<div>
   <div  class="card">
      <div class="card-body">
         <form wire:submit.prevent="save">
            <div class="row">
            @if(!session()->has('date'))
               <div class="col-md-6 mb-3">
                  <label>Date </label>  <i class="fa-solid fa-calendar-days"></i>
                  <input type="date-local" placeholder="Enter Date.." wire:model.defer="date" class="form-control"  style="border:  0.5px solid blue">
                  @error('date')<small class="text-danger">{{$message}}</small>@enderror
                   </div>
               <div class="col-md-6 mb-3">
                  <label>Time </label>  <i class="fa-solid fa-calendar-day"></i>
                  <input type="time-local" placeholder="Enter Time.." wire:model.defer="time" class="form-control" style="border: 0.5px solid blue">
                  @error('time')<small class="text-danger">{{$message}}</small>@enderror
               </div>
              
               <a wire:click="continueSession()" wire:model.defer="date" wire:model.defer="time" class="btn btn-secondary col-md-2">continue</a>     
               @endif 
               @if(session()->has('date'))
               <div  wire:ignore.self class="col-md-6 mb-3">
                   <br>
                  <label>name</label>
                  <input type="text" placeholder="Enter your Name" wire:model.defer="name2" class="form-control" style="border: 1px solid red">
                  @error('name2')<small class="text-danger">{{$message}}</small>@enderror
               </div>
               <div  class="col-md-6 mb-3">
                   <br>
                  <label>Phone</label>
                  <input type="number" placeholder="Enter your phone" wire:model.defer="phone" class="form-control" style="border: 1px solid red">
                  @error('phone')<small class="text-danger">{{$message}}</small>@enderror
               </div>
               <div class="col-md-6 mb-3">
               
                  <label>address</label>
                  <input type="text" placeholder="Enter your address" wire:model.defer="address2" class="form-control" style="border: 1px solid red">
                  @error('address2')<small class="text-danger">{{$message}}</small>@enderror
               
               </div>
               <div class="col-md-6 mb-3">
               
               <label>Description</label>
               <textarea  placeholder="Enter your description" wire:model.defer="description" class="form-control" style="border: 1px solid red"></textarea>
               @error('description')<small class="text-danger">{{$message}}</small>@enderror
            
           <br> <button type="submit" class="btn btn-primary col-md-2">Save</button>
            </div> @endif
            </div>



         </form>
      </div>
   </div>

</div>