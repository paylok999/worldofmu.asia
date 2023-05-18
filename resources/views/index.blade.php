  @extends('layout')
  @section('content')
  
  <div class="banner_section layout_padding">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-5 carousel-text">
                <h1 class="video_text">World of MU</h1>
                <h1 class="controller_text">Progressive Server</h1>
                <p class="banner_text">Our server will introduce a new gaming system that will guaranteed the long term gameplay of enjoyment. We will make sure that all of your time spent will be worth it, and every update, will be exciting as if you are back to the old MU Gameplay</p>
              </div>
              <div class="col-md-7">
                <div class="image_1"><img src="images/c_dk.png"></div>
            </div>
          </div>
          </div>
          
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-5 carousel-text">
                <h1 class="video_text">Our Goal</h1>
                <h1 class="controller_text">Season Update</h1>
                <p class="banner_text">With season update, players will have something to look forward that will keep them excited. Our goal is to have an incremental update in which we will start at the core of MU - Season 1. This is the same gameplay as we had the first time the MU was introduced</p>
              </div>
              <div class="col-md-7">
                <div class="image_1"><img src="images/c_wiz.png"></div>
            </div>
          </div>
          </div>
          
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-5 carousel-text">
                <h1 class="video_text">Basic 3 Class</h1>
                <h1 class="controller_text">Unlockable MG</h1>
                <p class="banner_text">Introducing the basic 3 Characters - Dark Knight, Dark Wizard, and Fairy Elf. With Magic Gladiator that is unlockable by level 220. This is really a classic experience!</p>
              </div>
              <div class="col-md-7">
                <div class="image_1"><img src="images/c_elf.png"></div>
            </div>
          </div>
          </div>


        </div>
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i> 
        </a>
      </div>
    </div>
  </div>
  <!-- banner section end -->
  <!-- about section start -->
  <div class="about_section layout_padding index_div_section">
    <div class="container container_addition">
      <div class="row">
        <div class="col-md-12">
          <h1 class="head-text" id="srvr-info">Server Information</h1>
          
           <table class="table">
          <tbody>
            <tr>
                <td class="server-stat">Server Status</td>
                <td class="server-value"><span class="text-success">Online</span></td>
            </tr>
            <tr>
                <td class="server-stat">Online Count</td>
                <td class="server-value"><span class="text-success">{{$online}}</span></td>
            </tr>
            <tr>
                
                <td class="server-stat">Version</td>
                <td class="server-value">Season 1 Progressive Server</td>
            </tr>
            <tr>
                <td class="server-stat">IP Max Client</td>
                <td class="server-value">3 per server</td>
            </tr>
            <tr>
                <td class="server-stat">Experience</td>
                <td class="server-value">x5</td>
            </tr>
            <tr>
                <td class="server-stat">Seal Experience</td>
                <td class="server-value">None</td>
            </tr>
   
            <tr>
                <td class="server-stat">Max Level</td>
                <td class="server-value">400</td>
            </tr>

            <tr>
                <td class="server-stat">Max Class Quest</td>
                <td class="server-value">Second Job</td>
            </tr>
            <tr>
                <td class="server-stat">Max Wing</td>
                <td class="server-value">1st Wing</td>
            </tr>
            <tr>
                <td class="server-stat">Max Item Level</td>
                <td class="server-value">11</td>
            </tr>
            <tr>
                <td class="server-stat">Summoner</td>
                <td class="server-value">No</td>
            </tr>
            <tr>
                <td class="server-stat">Darklord</td>
                <td class="server-value">No</td>
            </tr>
            <tr>
                <td class="server-stat">Rage Fighter</td>
                <td class="server-value">No</td>
            </tr>
            <tr>
                <td class="server-stat">380 System</td>
                <td class="server-value">No</td>
            </tr>
            <tr>
                <td class="server-stat">Elemental System</td>
                <td class="server-value">No</td>
            </tr>
            <tr>
                <td class="server-stat">Lucky Set</td>
                <td class="server-value">No</td>
            </tr>
            <tr>
                <td class="server-stat" style="border:none !important">Damage/Buffs Scroll</td>
                <td class="server-value" style="border:none !important">No</td>
            </tr>
          </tbody>
        </table>
        
        </div>
      </div>
    </div>
  </div>

  
  @stop