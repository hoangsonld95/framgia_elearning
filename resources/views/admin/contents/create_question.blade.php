<button type="button" class="btn btn-success" data-toggle="modal" data-target="#CreateQuestion" data-whatever="@getbootstrap">
    <i class ="glyphicon glyphicon-plus"></i>
    Create Question
</button>
<div class="modal fade" id="CreateQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Create question</h4>
            </div>
            <div class="modal-body" id="box-create-question">
                {!! Form::open(['action' => ['Admin\QuestionController@createQuestion', 1], 'method' => 'post', 'files' => true]) !!}
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="control-label">Question content:</label>
                        <input type="text" class="form-control" name="question-content" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Point of question:</label> <br>
                        <select class="selectpicker show-tick" data-style="btn-primary"
                                name="question-point">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Course:</label> <br>
                        <select class="selectpicker show-tick" data-style="btn-primary"
                                name="question-course">
                            @foreach($list_course as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Type of question:</label> <br>
                        <select class="selectpicker show-tick" data-style="btn-primary"
                                name="question-type">
                            @foreach($list_type as $type)
                                <option value="{{$type->id}}">{{$type->type}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id = "create-subject">Create</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script>
    $('#CreateQuestion').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    });
</script>