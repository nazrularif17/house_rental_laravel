@include ('header')
<style>
    @keyframes fadeLeft {
  0% {
    transform: translateX(-5rem);
    opacity: 0;
  }
}

@keyframes fadeUp {
  0% {
    transform: scale(0.5);
    opacity: 0;
  }
}

.home {
  padding-top: 20rem;
  background: url("{{ url('/images/home4.gif') }}") no-repeat;
  background-size:  cover;
  background-position: center;
  position: fixed;
  width: 100%;
  height: 700px;
}
.home .slides-container {
    margin-left: 10%;
}
.home .slides-container .slide {
  display: flex;
  gap: 1.5rem;
  display: none;
  height: 100%;
}

.home .slides-container .slide.active {
  display: flex;
}

.home .slides-container .slide .content {
  margin-right: 10%;
  animation: fadeLeft 0.4s linear 0.4s backwards;
}

.home .slides-container .slide .content span {
  color: #F9EBDE;
  font-size: 2.5rem;
}

.home .slides-container .slide .content h3 {
  font-size: 6rem;
  color: #FF8800;
  padding: 0.5rem 0;
}

.home .slides-container .slide .image {
    display: flex;
    margin-right: 10%;
}

.home .slides-container .slide .image img {
    width: 600px;
    animation: fadeUp 0.4s linear;
    background-size: cover;
}

.home #next-slide,
.home #prev-slide {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 5rem;
  width: 5rem;
  line-height: 5rem;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  text-align: center;
  background: #F9EBDE;
  font-size: 3rem;
  color: #815854;
  cursor: pointer;
}

.home #next-slide:hover,
.home #prev-slide:hover {
  background: #FF8800;
  color: #F9EBDE;
}

.home #prev-slide {
  left: 2rem;
}

.home #next-slide {
  right: 2rem;
}
.btn {
    color: #F9EBDE;
    background-color: #FF8800;
}
.btn:hover {
    color: #F9EBDE;
    border: 2px solid #FF8800;
}
</style>
<section class="home">
    <div class="slides-container">
        <div class="slide active">
            <div class="content">
                <span>Find out</span>
                <h3>Suitable property</h3>
                <a href="{{ route('property.index') }}" class="btn">Property</a>
            </div>
            <div class="image">
                <img src="{{ url('/images/prop_img.jpg') }}" alt="property image">
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <span>Find out</span>
                <h3>Suitable room</h3>
                <a href="{{ route('room.index') }}" class="btn">Room</a>
            </div>
            <div class="image">
                <img src="{{ url('/images/room_img.jpg') }}" alt="room image">
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <span>advertise your</span>
                <h3>Room vacancy</h3>
                <a href="{{ route('room.create') }}" class="btn">room advertisement</a>
            </div>
            <div class="image">
                <img src="{{ url('/images/form_img.png') }}" alt="form image">
            </div>
        </div>
    </div>
    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>
</section>  
<script>
    let slides = document.querySelectorAll('.home .slides-container .slide');
    let index = 0;
    
    function next(){
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length;
        slides[index].classList.add('active');
    }
    
    function prev(){
        slides[index].classList.remove('active');
        index = (index - 1 + slides.length) % slides.length;
        slides[index].classList.add('active');
    }
</script>