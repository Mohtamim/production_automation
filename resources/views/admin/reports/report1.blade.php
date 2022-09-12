@extends('admin.layout')
@section('title')
    Report-1
@endsection
@section('admin_content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row lh-base gp-0 mt-5" style="margin-left:20px;margin-right:20px">

      <div class="col-12"><h2 class="text-center text-dark text-align-center text-center font-weight-bold mt-3 border border-dark " >Dhaka Handicrafts Ltd.</h2></div>

    <div class="col-4"></div>
      <div class="col text-center lh-1" style="margin-bottom:30px ;font-size: 14px;">
         <address class="lh-sm mb-4">
        House #562,Road #08,Mirpur DOHS
            Mirpur-12, Dhaka-1218
         Post Box No.5023 ,New Market
              Dhaka,Bangladesh
           Email:example@gmail.com
            Web:www.handicraft.com
            <p class=" text-center lh-base text-dark fw-bold" style="font-size:22px"><u>Center's Advance Statement</u></p>
      </address>

      </div>

     
      <div class="col-4"></div>

    </div>
      <div class="row mb-4" style="margin-left:20px;margin-right:20px;">
          <div class="col-12 mb-4">
            <span class=" bg-light text-black font-weight-bold">Print Date: </span><br>
              <div class="card border-dark">
                <div class="card-body">
                    <span class=" bg-light text-black font-weight-bold">Center Name: </span><br>
                    <span class=" bg-light text-black font-weight-bold">Address: </span><br>
                    <span class=" bg-light text-black font-weight-bold">Village: </span><br>
                    <span class=" bg-light text-black font-weight-bold">Post: </span><br>
                    <span class=" bg-light text-black font-weight-bold">Dist: </span>
            <div class="table-responsive">
              <table  class="table table-borderless w-80">
                <thead class="border-bottom border-dark">
                  <tr>
                    <th class="text-center">SL</th>
                    <th class="text-center">Pack Name</th>
                    <th class="text-center">length</th>
                    <th class="text-center">width</th>
                    <th class="text-center">height</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">A</td>
                        <td class="text-center">B</td>
                        <td class="text-center">C</td>
                        <td class="text-center">D</td>
                        <td class="text-center">E</td>
                        <td class="text-center">F</td>
                  </tr>
                    <tr>
                        <td class="text-center">A</td>
                        <td class="text-center">B</td>
                        <td class="text-center">C</td>
                        <td class="text-center">D</td>
                        <td class="text-center">E</td>
                        <td class="text-center">F</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
      </div>
      <footer>
      <div class="row mt-5" style="margin:20">
      <div class="col-12"> <hr></div>
      <div class="col-12">
        <div class="row">
          <div class="col-4">Print Date:</div>
       <div class="col-6">DH BUSINESS MANAGEMENT SYSTEM</div>
       <div class="col-2">PAGE</div>
        </div>

      </div>
      </div>
    </footer>
  </div>

@endsection
