@extends('backend.master')
@section('container')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> Add New Posts <button class="btn btn-sm btn-default">Add New</button></h1>
    </div>
    <div class="search-div">
      <div class="col-sm-9">
        All(6) | <a href="#">Published (6)</a>
      </div>

      <div class="col-sm-3">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search Posts">
      </div>
    </div>  

    <div class="clearfix"></div>

    <div class="filter-div">
      <form method="post">
        <div class="col-sm-2">
          <select name="action" class="form-control">
            <option>Bulk Action</option>
            <option>Move to Trash</option>
          </select>
        </div>

        <div class="col-sm-1">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
      </form>
    
      <form method="post">
        <div class="col-sm-2">
          <select name="dates" class="form-control">
            <option>All Dates</option>
            <option>No Dates Found</option>
          </select>
        </div>
        <div class="col-sm-2">
          <select name="dates" class="form-control">
            <option>All Categories</option>
            <option>No Categories Found</option>
          </select>
        </div>
        <div class="col-sm-2">
          <button class="btn btn-default">Apply Filter</button>
        </div>  
      </form> 
      <div class="col-sm-3">
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li class="active"><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>  
    
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th width="50%"><input type="checkbox" id="select-all"> Title</th>
              <th width="15%">Author</th>
              <th width="15%">Category</th>
              <th width="10%">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <input type="checkbox" name="select-cat"> 
                <a href="#">Welcome to webtrickshome dashboard</a>
              </td>
              <td>admin@webtrickshome.com</td>
              <td>Welcome text</td>
              <td>Pubished 2018/01/05</td>              
            </tr>
            <tr>
              <td>
                <input type="checkbox" name="select-cat"> 
                <a href="#">Welcome to webtrickshome dashboard</a>
              </td>
              <td>admin@webtrickshome.com</td>
              <td>Welcome text</td>
              <td>Pubished 2018/01/05</td>              
            </tr>
            <tr>
              <td>
                <input type="checkbox" name="select-cat"> 
                <a href="#">Welcome to webtrickshome dashboard</a>
              </td>
              <td>admin@webtrickshome.com</td>
              <td>Welcome text</td>
              <td>Pubished 2018/01/05</td>              
            </tr>
            <tr>
              <td>
                <input type="checkbox" name="select-cat"> 
                <a href="#">Welcome to webtrickshome dashboard</a>
              </td>
              <td>admin@webtrickshome.com</td>
              <td>Welcome text</td>
              <td>Pubished 2018/01/05</td>              
            </tr>
            <tr>
              <td>
                <input type="checkbox" name="select-cat"> 
                <a href="#">Welcome to jiwan dashboard</a>
              </td>
              <td>admin@webtrickshome.com</td>
              <td>Welcome text</td>
              <td>Pubished 2018/01/05</td>              
            </tr>
            <tr>
              <td>
                <input type="checkbox" name="select-cat"> 
                <a href="#">Welcome to webtrickshome dashboard designed by jiwan dai</a>
              </td>
              <td>admin@webtrickshome.com</td>
              <td>Welcome text</td>
              <td>Pubished 2018/01/05</td>              
            </tr>           
          </tbody>
        </table>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="filter-div">
      <form method="post">
        <div class="col-sm-2">
          <select name="action" class="form-control">
            <option>Bulk Action</option>
            <option>Move to Trash</option>
          </select>
        </div>

        <div class="col-sm-1">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
      </form>
    
      
      <div class="col-sm-3 col-sm-offset-6">
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li class="active"><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

@stop