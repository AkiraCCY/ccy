<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">


<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- DEMO -->
<nav>
  <div class="inner">
    <input class="search_box" type=search placeholder="Search...">
    <div class="search"><i class="fa fa-search"></i></div>   
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Work</a></li>
      <li><a href="#">Contact</a></li>
    </ul> 
  </div>
</nav>




<script>
  // Search Toggle //
$( ".search" ).click(function() {
 $( "ul" ).toggleClass( "active" );
 $( ".search_box" ).toggleClass( "search_box_active" );
});

$nav_bg: #860255; // purple
$nav_bg2: #EF4B3F ; // Orange
$search_bg: rgba(0,0,0,0.1) ; // Search box
$search_bg_hover: rgba(0,0,0,0.3) ; // Search box

</script>


<style >



body{
  background: #2E2F40;
  font-family: 'Montserrat', sans-serif;
}

nav {
 max-width: 1000px;
 height: 0px;
 border-bottom: 100px solid $nav_bg;
 border-left: 40px solid transparent;
 position: relative;
 margin: 0 auto;
 box-shadow: 20px 17px 27px rgba(0, 0, 0, 0.15);
  
  &::before{
    content: '';
    margin-top: 10%;
    display: block;
  }
 
  .inner{
    width: 100%;
    height: 100px;
    position: absolute;
    right: 0;
    overflow: hidden;
    background: $nav_bg;
    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, right top, color-stop(0, $nav_bg), color-stop(100, $nav_bg2));
    /* IE10+ */ 
    background-image: -ms-linear-gradient(left, $nav_bg 0%, $nav_bg2 100%);
    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(left, $nav_bg 0%, $nav_bg2 100%);
    /* Opera */ 
    background-image: -o-linear-gradient(left, $nav_bg 0%, $nav_bg2 100%);
    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(left, $nav_bg 0%, $nav_bg2 100%);
    /* W3C Markup */ 
    background-image: linear-gradient(to right, $nav_bg 0%, $nav_bg2 100%);
  }
  
  .active{
    top: 80px!important;
    position: relative;
    transition: all .3s;
  }
  
  ul{
    float: right;
    list-style-type: none;
    line-height: 6.2;
    padding: 0;
    margin: 0;
    transition: all .3s;
    position: relative;
    top: 0;
  }
  
  li{
    display: inline-block;
    margin: 0;
  
    &::before{
      content: ' / ';
      margin: 0 10px;
      color: rgba(255, 255, 255,0.5);
    }
    
    &:first-child{
      &::before{
        display: none;
      }
    }
  }
    
  .search{
    width: 80px;
    height: 0px;
    float: right;
    color: #fff;
    font-size: 18px;
    border-bottom: 100px solid $search_bg;
    border-left: 40px solid transparent;
    position: relative;
    transition: .3s;
    
    &::before{
      content: '';
    }
    
    &:hover{
      border-bottom: 100px solid $search_bg_hover;
    }
  }
  
  .fa-search{
    position: relative;
    left: 25px;
    top: 38px;
  }
  
  input[type=search]{
      background: transparent;
    border: none;
    border-bottom: 2px solid #fff;
    -webkit-appearance: none;
  }
  input.search_box, {
    position: absolute;
    font-size: 16px;
    color: #fff;
    line-height: 4;
    top: -100px;
    width: 320px;
    right: 130px;
    transition: all .3s;
  }  
  .search_box_active{
    top: 15px!important;
    transition: all .3s;
  }
  
  input:focus{
    outline: none;
  }
  
  input::-webkit-input-placeholder {
    color: #fff;
  }
  
  input[type="search"]::-webkit-search-cancel-button {
    -webkit-appearance: none;
    height: 1px;
    width: 15px;
    background: transparent;
    border-radius: 50%;
    
    &::before{
    content: '+';
    color: #fff;
    font-weight: bold;
    -webkit-transform: rotate(45deg);
    font-size: 21px;
    position: absolute;
    top: -10px;
    }
    
  }
  
  a{
    color: #fff;
    text-decoration: none;
  }
 
}
</style>


