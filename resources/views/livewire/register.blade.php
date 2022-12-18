<div>
   <form wire:submit.prevent="register">

        <label for="name">名前</label>
        <input id="name" type="text" wire:model="name" style="border:1px solid #333;"><br>
        <div class="">
            @error('name') 
            <div class="text-red-600"><span class="error">{{ $message }}</span> </div>
            @enderror
        </div>

        <br>

        <label for="email">メールアドレス</label>
        <input id="email" type="email" wire:model.lazy="email" style="border:1px solid #333;"><br>
        <div class="">
            @error('email') 
            <div class="text-red-600"><span class="error">{{ $message }}</span> </div>
            @enderror
        </div>

        <br>

        <label for="password">パスワード</label>
        <input id="password" type="password" wire:model="password" style="border:1px solid #333;"><br>
        <div class="">
            @error('password') 
               <div class="text-red-600"><span class="error">{{ $message }}</span> </div>
            @enderror
        </div>
        <br>

        <button class="" type="">登録する</button>
   </form>
</div>
