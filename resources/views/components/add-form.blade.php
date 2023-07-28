<div>
  <br>
      <h2 class="text-georgia">Add User Form</h2>
  <br>    
      @if(Session::get('success'))
        <div class="success-msg">
          {{ Session::get('success') }}
        </div>
      @endif
      
      <form action="{{ route('user.add.auth') }}" method="POST">
        @csrf
        <div>
          <label for="firstname">Firstname: </label>
          <br>
          <input type="text" name="firstname" value="{{ old('firstname') }}" required autofocus>
          @error('firstname')
            <span style="color:red">{{ $message }}. e.g., John</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="middlename">Middlename: </label>
          <br>
          <input type="text" name="middlename" value="{{ old('name') }}">
          @error('middlename')
            <span style="color:red">{{ $message }}. eg., Svartholm</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="lastname">lastname: </label>
          <br>
          <input type="text" name="lastname" value="{{ old('lastname') }}" required autofocus>
          @error('lastname')
            <span style="color:red">{{ $message }}. e.g., Doe</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="email">Email: </label>
          <br>
          <input type="email" name="email" value="{{ old('email') }}" required>
          @error('email')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="password">Password: </label>
          <br>
          <input type="password" name="password" class="form-control" required>
          @error('password')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="password_confirmation">Confirm Password: </label>
          <br>
          <input type="password" name="password_confirmation" required>
          @error('password_confirmation')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <label for="role">Role: </label>
          <br>
            <select name="role" value="">
              <option value="user" selected>
                User
              </option>
              <option value="admin">
                Admin
              </option>
            </select>
          @error('role')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div>
          <button class="clear-btn" type="reset" onclick="return confirm('Are you sure you want to clear all fields?')">Clear</button>
          <button class="submit-btn" type="submit" onclick="return confirm('Are you sure you want to submit?')">
            Submit
          </button>
        </div>
      </form>
</div>