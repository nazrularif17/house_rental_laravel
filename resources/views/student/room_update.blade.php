@include ('header')
<style>
    .index-head {
        margin: 3%;
        margin-bottom: 0%;
        font-size: x-large;
    }
    hr {
        background-color: grey;
        width: 94%;
        height: 2px;
        margin-left: 3%;
    }
    .testbox {
      display: flex;
      align-content: center;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      margin: 2%;
      width: 50%;
      margin-left: 25%;
      }
    p {
        font-size: 15px;
    }
      form:not(.logout-form) {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #815854;
      }
      .form-container {
        margin-left: 15%;
        max-width: 70%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #FF8800;
      border-radius: 3px;
      box-shadow: 0 0 20px 0 #F9EBDE; 
      }
      input {
      width: 100%;
      padding: 3px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: 100%;
      padding: 5px;
      height: 72px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #333;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #815854;
      color: #333;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      .submit-button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #FF8800;
      font-size: 16px;
      color: #F9EBDE;
      cursor: pointer;
      }
      .submit-button:hover {
      background: #fff;
      color: #FF8800;
      border: 1px solid #FF8800;
      }
      .delete-button {
        position: absolute;
        right: 5%;
        top: 20%;
        font-size: 16px;
        font-weight: 700;
        height: 10px;
      }
      .delete-button:hover {
        cursor: pointer;
      }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">Update Room</h1>
    </div>
    <hr/>
    <div class="testbox">
        <form action="{{ route('room.update',$room->id) }}" method="POST">
            @csrf
            @method ('PUT')
            <div class="form-container">
                <div class="item">
                    <p>Room Title</p>
                    <input type='text' name='roomTitle' value="{{ $room->roomTitle }}" placeholder="Title">
                </div>
                <div class="item">
                    <p>Room Rent Price</p>
                    <input type='number' name='roomPrice' value="{{ $room->roomPrice }}" placeholder="Room price (RM)">
                </div>
                <div class="item">
                    <p>Room Furnishings</p>
                    <select class="form-control" id="propertyType" name="roomFurnishings">
                        <option selected disabled>Room type</option>
                        <option value="fully furnished" {{ $room->roomFurnishings == 'fully furnished' ? 'selected' : '' }}>Fully furnished</option>
                        <option value="partially furnished" {{ $room->roomFurnishings == 'partially furnished' ? 'selected' : '' }}>Partially furnished</option>
                        <option value="not furnished" {{ $room->roomFurnishings == 'not furnished' ? 'selected' : '' }}>Not furnished</option>
                    </select>
                </div>
                <div class="item">
                    <p>Room Description</p>
                    <input type='text' name='roomDesc' value="{{ $room->roomDesc }}" placeholder="room description">
                </div>
                <div class="item">
                    <p>Room Status</p>
                    <select class="form-control" id="roomType" name="roomStatus">
                        <option selected disabled>room Status</option>
                        <option value="available" {{ $room->roomStatus == 'available' ? 'selected' : '' }}>Available</option>
                        <option value="rented out" {{ $room->roomStatus == 'rented out' ? 'selected' : '' }}>Rented out</option>
                    </select>
                </div>
            </div>
            <div class="btn-block">
                <input class="submit-button" type="submit" value="Update Room">
            </div>
        </form>
        <div class="delete-button">
            <form id="delete-form" method="post" action="{{ route('room.destroy',$room->id) }}">
                @csrf
                @method ('DELETE')
                <a type="button" onclick="confirmDelete()">Delete</a>
            </form>
        </div>
    </div>
</body>
<script>
    function confirmDelete() {
      if (confirm('Are you sure you want to delete this object?')) {
        document.getElementById('delete-form').submit();
      }
    }
</script>