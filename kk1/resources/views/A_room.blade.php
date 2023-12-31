<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>

    body {
    background: linear-gradient(to right, green 0%, yellow 100%);
    font-size: 12px;
    }
    
    body, button, input {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    letter-spacing: 1.4px;
    }
    
    .background {
    display: flex;
    min-height: 100vh;
    }
    
    .container {
    flex: 0 1 700px;
    margin: auto;
    padding: 10px;
    }
    
    .screen {
    position: relative;
    background: #3e3e3e;
    border-radius: 15px;
    }
    
    .screen:after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 20px;
    right: 20px;
    bottom: 0;
    border-radius: 15px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
    z-index: -1;
    }
    
    .screen-header {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    background: #4d4d4f;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    }
    
    .screen-header-left {
    margin-right: auto;
    }
    
    
    .screen-body {
    display: flex;
    }
    
    .screen-body-item {
    flex: 1;
    padding: 50px;
    }
    
    .screen-body-item.left {
    display: flex;
    flex-direction: column;
    }
    
    .app-title {
    display: flex;
    flex-direction: column;
    position: relative;
    color: #ea1d1d;
    font-size: 26px;
    }
    
    .app-title:after {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 25px;
    height: 4px;
    background: #ea1d1d;
    }
    
    .app-HotelBookingRegistrationview {
    margin-top: auto;
    font-size: 8px;
    color: #888;
    }
    
    .app-form-group {
    margin-bottom: 15px;
    }
    
    .app-form-group.phone {
    margin-top: 40px;
    }
    
    .app-form-group.buttons {
    margin-bottom: 0;
    text-align: right;
    }
    
    .app-form-control {
    width: 100%;
    padding: 10px 0;
    background: none;
    border: none;
    border-bottom: 1px solid #666;
    color: #ddd;
    font-size: 14px;
    text-transform: uppercase;
    outline: none;
    transition: border-color .2s;
    }
    
    .app-form-control::placeholder {
    color: #666;
    }
    
    .app-form-control:focus {
    border-bottom-color: #ddd;
    }
    
    .app-form-button {
    background: none;
    border: none;
    color: #ea1d1d;
    font-size: 14px;
    cursor: pointer;
    outline: none;
    }
    
    .app-form-button:hover {
    color: orangered;
    }
    
    .credits {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    color: #ffa4bd;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 16px;
    font-weight: normal;
    }
    
    .credits-link {
    display: flex;
    align-items: center;
    color: #fff;
    font-weight: bold;
    text-decoration: none;
    }
    
    .dribbble {
    width: 20px;
    height: 20px;
    margin: 0 5px;
    }
    
    @media screen and (max-width: 520px) {
    .screen-body {
    flex-direction: column;
    }
    
    .screen-body-item.left {
    margin-bottom: 30px;
    }
    
    .app-title {
    flex-direction: row;
    }
    
    .app-title span {
    margin-right: 12px;
    }
    
    .app-title:after {
    display: none;
    }
    }
    
    @media screen and (max-width: 600px) {
    .screen-body {
    padding: 40px;
    }
    
    .screen-body-item {
    padding: 0;
    }
    }
    
    


</style>
</head>

</body>
</html>
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>Book Now</span>
            <span>BOOK</span>
          </div>
         
        </div>
        <div class="screen-body-item">

        <form action="{{ route('room.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                        
                <div class="app-form">
                   <div class="app-form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="app-form-control @error('image') is-invalid @enderror">
                    {{-- @error('image')
                        <span class="invalid-feedback" role="alert">
                            <div class="app-form-group">{{ $message }}</div>
                        </span>
                    @enderror --}}
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="TYPE" name="type">
                  </div>
                 <div class="app-form-group">
                    <input class="app-form-control" placeholder="description" name="description">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="RATE" name="rate">
                  </div>
                 
                  <div class="app-form-group buttons">
                    <!-- <button class="app-form-button">CANCEL</button> -->
                    <button class="app-form-button"><a href="/amaster" style="text-decoration: none;">BACK</a></button>
                    <button class="app-form-button">OK</button>
                  </div>
                </div>
          </form>


        </div>
      </div>
    </div>

    <div class="credits">
      
      <!-- <a class="credits-link" href="https://dribbble.com/shots/2666271-HotelBookingRegistrationview" target="_blank"> -->
        <svg class="dribbble" viewBox="0 0 200 200">
          <g stroke="#ffffff" fill="none">
            <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
            <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
            <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
            <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
          </g>
        </svg>
        
      </a>
    </div>
  </div>
</div>





<a href="/U_roomview" style="font-size: 80px;"></a>

