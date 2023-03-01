<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Publication</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Publication</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('publications.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Publication Title">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Summary:</strong>
                        <input type="text" name="summary" class="form-control" placeholder="Publication Summary">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Associated Type:</strong>
                        <input type="text" name="associated_type" class="form-control" placeholder="Associated Type">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Authors:</strong>
                        <input type="text" name="author" class="form-control" placeholder="Authors">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Files:</strong>
                        <input type="file" name="file" class="form-control" placeholder="Files">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Publication Type:</strong>
                        <select name="publication_type" class="form-control" id="publication_type" onchange="myFunction()">
                            <option value="article">Article</option>
                            <option value="client_report">Client Report</option>
                            <option value="monograph">Monograph</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" id="article" style="display: flex">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Magazine:</strong>
                            <input type="text" name="magazine" placeholder="Magazine">
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Begin:</strong>
                            <input type="text" name="begin_page" placeholder="Beginning Page">
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>End:</strong>
                            <input type="text" name="end_page" placeholder="Ending Page">
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" id="client_report" style="display: flex">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Client Name:</strong>
                            <input type="text" name="client_name" placeholder="Client Name">
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Project Name:</strong>
                            <input type="text" name="project_name" placeholder="Project Name">
                            @error('project_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" id="monograph" style="display: flex">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Subject:</strong>
                            <input type="text" name="subject" placeholder="Subject Treated">
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Pages:</strong>
                            <input type="text" name="pages" placeholder="Number Of Pages">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

<script>
    var type = "article";
    if(type =="article") {
            document.getElementById("article").style.display = "flex";
            document.getElementById("client_report").style.display = "none";
            document.getElementById("monograph").style.display = "none"; 
        }
    function myFunction() {
        type = document.getElementById("publication_type").value;
        if(type == "article") {
            document.getElementById("article").style.display = "flex";
            document.getElementById("client_report").style.display = "none";
            document.getElementById("monograph").style.display = "none"; 
        }

        if(type == "client_report") {
            document.getElementById("article").style.display = "none";
            document.getElementById("client_report").style.display = "flex";
            document.getElementById("monograph").style.display = "none"; 
        }

        if(type == "monograph") {
            document.getElementById("article").style.display = "none";
            document.getElementById("client_report").style.display = "none";
            document.getElementById("monograph").style.display = "flex"; 
        }
         
    }
</script>

</html>