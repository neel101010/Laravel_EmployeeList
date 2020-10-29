<html>
<head>
    <style>
        .edit-page {
            padding: 70px;
            transition: all 0.5s ease;
        }
        .label {
            margin-bottom: 1px;
            font-weight: 500;
            color:  #17a2b8;
        }
        .submit-forms{
            padding-left: 350px;
        }
        .form-group input {
            font-size: 14px;
            font-weight: 500;
            width: 50%;
        }
        .btn{
            font-size: 14px;
            font-weight: 500;
            width: 50%;
            background-color: #17a2b8!important;
            border-color: #17a2b8!important
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Employee List</a>
    <ul class="navbar-nav ml-auto">
        <li>Made By Neel</li>
    </ul>
</nav>
<div class="edit-page">
    <form class="submit-forms" action={{route('edit_details')}} method="POST">
        @csrf
        <input type="hidden" name="id" value={{$employee->id}}>
        <div class="form-group">
            <label for="first_name" class="label">First Name</label>
            <input type="text" class="form-control" placeholder={{$employee->first_name}} name="first_name">
        </div>
        <div class="form-group">
            <label for="last_name" class="label">Last Name</label>
            <input type="text" class="form-control" placeholder={{$employee->last_name}} name="last_name">
        </div>
        <div class="form-group">
            <label for="email" class="label">Email</label>
            <input type="text" class="form-control" placeholder={{$employee->email}} name="email">
        </div>
        <div class="form-group">
            <label for="contact" class="label">Contact</label>
            <input type="text" class="form-control" placeholder={{$employee->contact}} name="contact">
        </div>
        <div class="btn"><button type="submit" class="btn btn-primary btn-md btn-block">Edit</button></div>
    </form>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>