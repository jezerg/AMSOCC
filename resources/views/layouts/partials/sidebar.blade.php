<style>

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #3B3D45;
  position: fixed;
  height: 100%;
  overflow: auto;
  top: 0;
  z-index: 100;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: #02152A;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


</style>
<sidebar class="sidebar p-3 bg-dark text-white">
<!-- <div class="sidebar p-3 bg-dark text-white"> -->
    <div class="container">
    <img class="mb-4" src="{!! url('images/occ.png') !!}" alt="" width="140" height="125">
    <a href="/" class="nav-link px-2 text-white">Home</a>
    <a href="/asset" class="nav-link px-2 text-white">Assets</a>
    <a href="/build" class="nav-link px-2 text-white">Build</a>
    <a href="/department" class="nav-link px-2 text-white">Department</a>
    <a href="/reports" class="nav-link px-2 text-white">Report</a>
    </div>
<!-- </div> -->
</sidebar>
