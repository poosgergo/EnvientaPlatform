<?php
    use App\Utils;
?>

@extends('00_header.platform')

@section('content')

    <div class="container p-3"><!-- Begin of the container -->
      <form method="post">
        {{ csrf_field() }}
      <div class="row mb-4"><!-- Begin of the Row -->
        <div class="col-md-12"><!-- Begin of the Main colum -->
          <div class="" style="height: 100px;"></div>

<!--

          <div class="row my-5">
            <div class="col-md-12">
              <div class="text-center">
                <h3>
                  <i class="fa fa-user-plus _clr" aria-hidden="true"></i>
                    Please pick your user type! <br>
                  <h5>You can pick more!</h5>
                </h3>
              </div>
            </div>
          </div>

          <hr>

          <div class="row my-5"><!- Begin of the - Maker/Projects/Investor ->
            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-cogs fa-3x _clr mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="maker_check" value="1" onchange="valueChanged()">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Maker</h5>
                      <small class="_clr">Available</small>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-briefcase fa-3x text-dark mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled="disabled">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Projects</h5>
                      <small><i>Unavailable</i> </small>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-money fa-3x text-dark mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled="disabled">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Investor</h5>
                      <small><i>Unavailable</i> </small>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div><!- End of the - Maker/Projects/Investor ->

          <div class="row mb-5"><!- Begin of the - Manifacturer/Distributor/Customer ->
            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-industry fa-3x text-dark mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled="disabled">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Manufacturer</h5>
                      <small><i>Unavailable</i> </small>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-dot-circle-o fa-3x text-dark mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled="disabled">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Distributor</h5>
                      <small><i>Unavailable</i> </small>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-dark" style="width: 18rem;">
                <div class="card-body text-center">
                  <i class="fa fa-shopping-basket fa-3x text-dark mb-3" aria-hidden="true"></i>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled="disabled">
                    <label class="form-check-label" for="defaultCheck1">
                      <h5 class="card-text">Customer</h5>
                      <small><i>Unavailable</i> </small>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div><!- End of the - Manifacturer/Distributor/Customer ->

          <hr>

-->
          <div class="row my-5"><!-- Begin of the Fill-form -->

              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{$user->email}}" readonly="true">
                  <!--small id="emailHelp" class="form-text text-muted">Please enter a valid email addres</small-->
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="username">
                    <i class="fa fa-user" aria-hidden="true"></i> Username</label>
                  <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username" value="{{$user->username}}">
                  <small id="emailHelp" class="form-text text-muted">Please enter a valid username</small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="real_name">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i> Real name</label>
                  <input type="text" class="form-control" name="realname" id="real_name" aria-describedby="emailHelp" placeholder="Enter real name" value="{{$user->realname}}">
                  <small id="emailHelp" class="form-text text-muted">Please enter a valid real name</small>
                </div>
              </div>

          </div><!-- End of the Fill-form -->
            <div class="row"><!-- Begin of the Photo/Social/Bio Row -->
              <div class="col-md-3">
                <div class="card border border-dark">
                  <div class="card-body text-center">
                    <!-- div class="bg-secondary rounded" style="height: 8.3em;" -->
                      <img class="fa fa-camera text-light" aria-hidden="true" src="{{ Utils::userAvatarBig() }}"/>
                    <!-- /div-->
                    <!--
                    <hr>
                    <form>
                      <div class="form-group mb-0">
                        <label for="upload_photo">Your Gravatar profile</label>
                        <!- <label for="upload_photo">Upload photo</label> ->
                        <!- <input type="file" class="form-control-file" id="upload_photo"> ->
                      </div>
                    </form>
                  -->
                  </div>
                </div>
              </div>
              <div class="col-md-9"><!-- Begin of the Social Col-md-9 -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" id="" name="profileUrl" placeholder="Facebook link" value="{{$user->profileUrl}}">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="twitterUrl" id="" placeholder="Twitter link" value="{{$user->twitterUrl}}">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="linkedinUrl" id="" placeholder="LinkedIn link" value="{{$user->linkedinUrl}}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="walletAddress" id="" placeholder="ERC-20" value="{{$user->walletAddress}}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="card border border-dark">
                      <div class="card-body text-left">
                        <div class="form-group mb-0">
                          <label for="exampleFormControlTextarea1"><h6>Biography</h6>
                          <small class="text-muted">Short description about you</small></label>
                          <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="3">{{$user->bio}}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End of the Social Col-md-9 -->
            </div><!-- End of the Photo/Social/Bio Row -->
          </div><!-- End of the Main colum -->
        </div><!-- End of the row -->

        <hr>

        <div class="row mb-4 animated fadeIn" id="_maker"><!-- Begin of the Maker Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">
                <!--
                <h6 class="text-left mb-3">
                  You picked the <b class="_clr">Maker</b> user type,
                  then please add a few tag about your skills
                </h6>
                -->

                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Skills</div>
                  </div>
                  <input type="text" class="form-control proplist" name="skills" id="" placeholder="Php, 3D printing.. etc" value="{{$user->skills}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Interests</div>
                  </div>
                  <input type="text" class="form-control proplist" name="interests" id="" placeholder="Robotics, AI.. etc" value="{{$user->interests}}">
                </div>
              </div>
            </div>
          </div>
        </div><!-- End of the Maker Section -->

        <div class="row mb-4 animated fadeIn" id="_manifacturer" style="display: none;"><!-- Begin of the Manifacturer Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">
                <h6 class="text-left mb-3">
                  You picked the <b class="_clr">Manifacturer</b> user type,
                  then please fill out a few details about you
                </h6>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Manifacturer name</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your manifacturer name">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Address</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your address">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Phone number</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your pohne number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Website address</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your website address">
                    </div>
                    <select class="custom-select mb-2">
                      <option selected>Working times:</option>
                      <option value="1">10 hour/week</option>
                      <option value="2">20 hour/week</option>
                      <option value="3">30 hour/week</option>
                      <option value="3">40 hour/week</option>
                      <option value="3">50 hour/week</option>
                    </select>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Tools</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="3D printer, laqser cutter, milling..etc">
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <h6 class="mb-3">Additional conditions and possiblities</h6>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                         Cutting machines that cut a variety of materials (plastics, metal, plaster, and other common materials) with precision (laser, water jet, knife)
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Decorative materials for painting, embroidery and embellishing projects
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Joining machines that use computer control to sew, weld, or bond in other ways
                      </label>
                    </div>

                    <hr>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            3D printers that are capable of producing three-dimensional objects
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Milling and routing machines that drill and shape complex parts
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Electronic parts and tools
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Tools for precision mechanics
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Traditional hand and power tools, including soldering irons
                          </label>
                        </div>

                      </div>

                      <div class="col-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Computers, cameras, softwares
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Craft and art supplies
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Building materials
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Junk for recycling into new products
                          </label>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Batteries
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Library
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End of the Manifacturer Section -->

        <div class="row mb-4 animated fadeIn" id="_customer" style="display: none;"><!-- Begin of the Customer Section -->
          <div class="col-md-12">
            <div class="card border border-dark">
              <div class="card-body text-left">
                <h6 class="text-left mb-3">
                  You picked the <b class="_clr">Customer</b> user type,
                  then please add a few tag about your skills
                </h6>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Address</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your address">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Phone number</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your phone number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Billing address</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your billing address">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Delivery address</div>
                      </div>
                      <input type="text" class="form-control" id="" placeholder="Your delivery address">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End of the Customer Section -->

        <hr>

        <div class="row mb-5">
          <div class="col-md-12">
            
            <a href="{{ url('/') }}">
              <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-chevron-left mr-1" aria-hidden="true"></i> Back to the front page</button>
            </a>
            
            <a href="#">
              <button type="submit" class="btn btn-sm btn-primary float-right">
                Save <i class="fa fa-floppy-o ml-1" aria-hidden="true"></i></button>
            </a>
          </div>
        </div>

      </form>
      </div><!-- End of the container -->

      <script type="text/javascript">
        function valueChanged()
        {
          if($('#maker_check').is(":checked"))
          $("#_maker").show();
          else
          $("#_maker").hide();
        }
      </script>

@endsection