@extends('layouts.app')

@section('content')
<script src="{{ asset('js/search.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#carouselExampleIndicators').carousel({
            interval: 3000
        });

        $('#disclaimer-modal').modal('show');
    });
   
</script>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ URL::asset('./images/slider/slider1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::asset('./images/slider/slider2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::asset('./images/slider/slider3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br>
<div class="container">
    <div class="container-fluid">
        <form id="search-form">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <h2>What are you looking for?</h2>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="item name">Name</label>
                        <input placeholder="Enter name" id="item-name" spellcheck="false" class="form-control uppercase" maxlength="100" 
                                name="name"
                                value=""
                                oninput="javascript: if (this.value.length > this.maxLength) 
                                            this.value = this.value.slice(0, this.maxLength);" 
                                />
                    </div>
                    <div class="form-group col-sm-3 col-md-3 col-lg-3">
                        <label for="item price">Price From</label>
                        {{ Form::number('priceFrom','',
                                        ['class' => 'form-control txtDecimals defaultZero',
                                        'onkeypress' =>'return isDecimal(event)',
                                        'placeholder' => 'From',
                                        'min' => '0' ]
                                        ) }}
                    </div>
                    <div class="form-group col-sm-3 col-md-3 col-lg-3">
                        <label for="item price">Price To</label>
                        {{ Form::number('priceTo','',
                                        ['class' => 'form-control txtDecimals',
                                        'onkeypress' =>'return isDecimal(event)',
                                        'placeholder' => 'To',
                                        'min' => '0' ]
                                        ) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-3 col-md-3 col-lg-3">
                        <label for="item bedrooms">Bedrooms</label>
                        {{ Form::number('bedrooms','',
                                        ['class' => 'form-control txtDecimals',
                                        'onkeypress' =>'return isDecimal(event)',
                                        'min' => '0' ]
                                        ) }}
                    </div>
                    <div class="form-group col-sm-3 col-md-3 col-lg-3">
                        <label for="item bathrooms">Bathrooms</label>
                        {{ Form::number('bathrooms','',
                                        ['class' => 'form-control txtDecimals',
                                        'onkeypress' =>'return isDecimal(event)',
                                        'min' => '0' ]
                                        ) }}
                    </div>
                    <div class="form-group col-sm-3 col-md-3 col-lg-3">
                        <label for="item storeys">Storeys</label>
                        {{ Form::number('storeys','',
                                        ['class' => 'form-control txtDecimals',
                                        'onkeypress' =>'return isDecimal(event)',
                                        'min' => '0' ]
                                        ) }}
                    </div>
                    <div class="form-group col-sm-3 col-md-3 col-lg-3">
                        <label for="item garages">Garages</label>
                        {{ Form::number('garages','',
                                        ['class' => 'form-control txtDecimals defaultZero',
                                        'onkeypress' =>'return isDecimal(event)',
                                        'min' => '0' ]
                                        ) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="search-btnDiv">
                        <span style="margin-right: 10px;"><button type="button" class="btn btn-secondary" onclick="clearFields();"><i class="fas fa-eraser"></i> Clear Filter</button></span>
                        <button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<br><br>
<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="row" style="text-align: center;">
        <table id="houses-table" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Storeys</th>
                        <th>Garages</th>
                    </tr>
                </thead>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="disclaimer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Disclaimer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hi there. This page is for exercise purpose only. I do not own the images included here.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="noData-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        No results found
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="loaderImage">
    <img class="d-block w-100" src="{{ URL::asset('./images/ajax-loader.gif')}}" alt="ajaxloader">
</div>
@endsection
