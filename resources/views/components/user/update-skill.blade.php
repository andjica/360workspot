
<form action="{{route('update-skill')}}" method="post" id="">
                        @csrf
                                <div class="form-group">
                               
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="Mobile">ski one</label>
                                        <input type="text" class="form-control" id="sk1" name="sk1" value="{{$ski->skill_one}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr1" name="pr1" value="{{$ski->percent_one}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Mobile">ski two</label>
                                        <input type="text" class="form-control" id="sk2" name="sk2" value="{{$ski->skill_two}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr2" name="pr2" value="{{$ski->percent_two}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                </div>
                        
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="Mobile">ski Three</label>
                                        <input type="text" class="form-control" id="sk3" name="sk3" value="{{$ski->skill_three}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr3" name="pr3" value="{{$ski->percent_three}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Mobile">ski Four</label>
                                        <input type="text" class="form-control" id="sk4" name="sk4" value="{{$ski->skill_four}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr4" name="pr4" value="{{$ski->percent_four}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="Mobile">ski five</label>
                                        <input type="text" class="form-control" id="sk5" name="sk5" value="{{$ski->skill_five}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr5" name="pr5" value="{{$ski->percent_five}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Mobile">ski Six</label>
                                        <input type="text" class="form-control" id="sk6" name="sk6" value="{{$ski->skill_six}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr6" name="pr6" value="{{$ski->percent_six}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="Mobile">ski Seven</label>
                                        <input type="text" class="form-control" id="sk7" name="sk7" value="{{$ski->skill_seven}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr7" name="pr7" value="{{$ski->percent_seven}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Mobile">ski eight</label>
                                        <input type="text" class="form-control" id="sk8" name="sk8" value="{{$ski->skill_eight}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr8" name="pr8" value="{{$ski->percent_eight}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="Mobile">ski Nine</label>
                                        <input type="text" class="form-control" id="sk9" name="sk9" value="{{$ski->skill_nine}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr9" name="pr9" value="{{$ski->percent_nine}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                               
                                <div class="form-group col-md-4">
                                        <label for="Mobile">ski Ten</label>
                                        <input type="text" class="form-control" id="sk10" name="sk10" value="{{$ski->skill_10}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="Link">Percent</label>
                                        <input type="text" class="form-control" id="pr10" name="pr10" value="{{$ski->percent_ten}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                    </div>
                                <input type="submit" class="btn btn-primary" value="Save changes">
                            </form>
          