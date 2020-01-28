@extends('master')
@section('portfolio','active open')
@section('portfoliocont','active')
@section('content') 
<main class="main--container">
<section class="main--content">
    <div class="row gutter-20">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Portfolio Content</h3>                   
                </div>
                <div class="panel-content">                  
                    <ul class="nav nav-tabs nav-tabs-line">
                        <li class="nav-item">
                            <a href="#tab07" data-toggle="tab" class="nav-link active">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab08" data-toggle="tab" class="nav-link">Details</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab09" data-toggle="tab" class="nav-link">More</a>
                        </li>
                    </ul>
                    <!-- Tabs Nav End -->

                    <!-- Tab Content Start -->
                    <div class="tab-content">
                        <!-- Tab Pane Start -->
                        <div class="tab-pane fade show active" id="tab07">
                            <div class="col-md-12">
                                <!-- Panel Start -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Portfolio Contents</h3>
                                    </div>
                                <form method="post" id="portfolio" enctype="multipart/form-data">
                                     @csrf
                                    <div class="panel-content">
                                        <!-- Form Group Start -->
                                        <div class="form-group row">
                                            <span class="label-text col-md-2 col-form-label text-md-right">Title</span>
                                            <div class="col-md-10">
                                                <input type="text" name="title" class="form-control" placeholder="Write Title...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <span class="label-text col-md-2 col-form-label text-md-right">S_Description</span>
                                            <div class="col-md-10">
                                                <textarea name="short_desc" class="form-control" placeholder="Write Short Description..."></textarea>
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <span class="label-text col-md-2 col-form-label text-md-right">L_Description</span>
        
                                            <div class="col-md-10">
                                                <textarea name="long_desc" class="form-control my-portfolio" placeholder="Write Long Description..."></textarea>
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <span class="label-text col-md-2 col-form-label text-md-right">Select Option</span>
                                            <div class="col-md-10">
                                                <select name="category" class="form-control">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                    <option value="4">Option 4</option>
                                                </select>
                                            </div>
                                        </div>                                      
                                        <div class="form-group row">
                                            <span class="label-text col-md-2 col-form-label text-md-right">File Input</span>
                                            <div class="col-md-10">
                                                <label class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input">
                                                    <span class="custom-file-label">Choose File</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <span class="label-text col-md-2 col-form-label text-md-right">Live Link</span>
                                            <div class="col-md-10">
                                                <input type="text" name="prev_link" class="form-control" placeholder="Write Live Link...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <span class="label-text col-md-2 col-form-label text-md-right">Github Link</span>
                                            <div class="col-md-10">
                                                <input type="text" name="git_link" class="form-control" placeholder="Write Github Link...">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-rounded btn-block btn-success" value="save">
                                    </div>
                                </form>
                                </div>
                                <!-- Panel End -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab08">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ex quas, nostrum. Officia suscipit possimus inventore adipisci corporis?</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius voluptatum voluptas quas debitis ex sit incidunt repudiandae pariatur?</p>
                        </div>
                        <!-- Tab Pane End -->

                        <!-- Tab Pane Start -->
                        <div class="tab-pane fade" id="tab09">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ex quas, nostrum. Officia suscipit possimus inventore adipisci corporis?</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius voluptatum voluptas quas debitis ex sit incidunt repudiandae pariatur?</p>
                        </div>
                        <!-- Tab Pane End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="main--footer main--footer-light">
    <p>Copyright &copy; <a href="#">Mahbub</a>. All Rights Reserved.</p>
</footer>
</main>
<script src="{{asset('assets/portfolio.js')}}"></script>
<script>
    var config = {
        routes: {
           storeportfoliocontent: "{{route('portfolio.store')}}",
           
        }
    };
</script>
@endsection