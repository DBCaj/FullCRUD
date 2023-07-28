<div>
  @extends('layouts.editForm')
  @section('edit-content')
 
      <br>
      <h2 class="text-georgia">Update User Form</h2>
      <br>
      
      @if(Session::get('success'))
        <div class="success-msg">
          {{ Session::get('success') }}
        </div>
      @endif
      
      <form action="{{ route('user.edit.auth') }}" method="POST">
        @csrf
        <input type="hidden" name="userId" value="{{ $user->id }}">
        <div>
          <label for="name">Full Name:</label>
          <br>
          <input type="text" disabled placeholder="{{ $user->name }}">
        </div>
        <br>
        <div>
          <label for="firstname">Firstname: </label>
          <br>
          <input type="text" name="firstname" value="{{ $user->firstname }}" required autofocus>
          @error('firstname')
            <span style="color:red">{{ $message }}. e.g., John</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="middlename">Middlename: </label>
          <br>
          <input type="text" name="middlename" value="{{ $user->middlename }}">
          @error('middlename')
            <span style="color:red">{{ $message }}. eg., Svartholm</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="lastname">Lastname: </label>
          <br>
          <input type="text" name="lastname" value="{{ $user->lastname }}" required>
          @error('lastname')
            <span style="color:red">{{ $message }}. e.g., Doe</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="email">Email: </label>
          <br>
          <input type="email" name="email" value="{{ $user->email }}" required>
          @error('email')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="password">New Password: </label>
          <br>
          <input type="text" name="password" placeholder="You can leave this empty">
          @error('password')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="password_confirmation">Confirm Password: </label>
          <br>
          <input type="text" name="password_confirmation" placeholder="You can leave this empty">
          @error('password_confirmation')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="role">Role:</label>
          <br>
          
          <select name="role">
            <option value="{{ $user->role }}" selected>
             {{ $user->role }}
            </option>
            <option value="{{ $user->role == 'user' ? 'admin' : 'user' }}">
              {{ $user->role == 'user' ? 'admin' : 'user' }}
            </option>
          </select>

          @error('role')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <button class="submit-btn" type="submit" onclick="return confirm('Are you sure you want to update?')">
            Update
          </button>
        </div>
      </form>

  @stop  

</div>