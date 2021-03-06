@extends('layout.front_layout')
@section('content')
<div class="container">
            <div class="alumni-directory">
               <div class="top-section">
                   <div class="row">
                       <div class="title-page text-left col-md-6 col-sm-12 col-xs-12">
                           <h4 class="text-regular"> Alumni Directory</h4>
                       </div>
                       <div class="search-alumni-directory text-right col-md-6 col-sm-12 col-xs-12">
                           <form class="navbar-form no-margin no-padding">
                               <input type="text" name="q" class="form-control input-search" placeholder="Keywords (e.g. name, city, school...)" autocomplete="off">
                               <button type="submit" class=" bg-color-theme text-center text-regular">Search</button>
                           </form>
                       </div>
                   </div>
               </div>
               <div class="alumni-directory-content">
                    <ul class="list-item">
                        <li class="label-content">
                            <span class="user">Name</span>
                            <span class="year">Year Graduate</span>
                            <span class="city">City</span>
                            <span class="scholl">School</span>
                            <span class="department">department</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user1.png" alt=""><span class="label-name">Katherine Chen</span></span>
                            <span class="year">12 June 2012</span>
                            <span class="city">San Francisco</span>
                            <span class="scholl">School of Humanities &amp; Sciences</span>
                            <span class="department">East Asian Languages and Cultures</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user2.png" alt=""><span class="label-name">Barbara Ortiz</span></span>
                            <span class="year">02 August 2013</span>
                            <span class="city">New York</span>
                            <span class="scholl">School of Engineering</span>
                            <span class="department">Bioengineering</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user3.png" alt=""><span class="label-name">Michael Kennedy</span></span>
                            <span class="year">03 August 2011</span>
                            <span class="city">Saint Petersburg</span>
                            <span class="scholl">School of Medicine</span>
                            <span class="department">Cardiothoracic Surgery</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user4.png" alt=""><span class="label-name">Harry Foster</span></span>
                            <span class="year">18 August 2008</span>
                            <span class="city">Johannesburg</span>
                            <span class="scholl">School of Engineering</span>
                            <span class="department">Civil &amp; Environmental Engineering</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user5.png" alt=""><span class="label-name">Sandra Dunn</span></span>
                            <span class="year">07 June 2007</span>
                            <span class="city">Jakarta</span>
                            <span class="scholl">School of Environmental Sciences</span>
                            <span class="department">Earth System Science</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user6.png" alt=""><span class="label-name">Steven Warren</span></span>
                            <span class="year">18 June 2013</span>
                            <span class="city">Washington</span>
                            <span class="scholl">School of Engineering</span>
                            <span class="department">Mechanical Engineering</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user7.png" alt=""><span class="label-name">Dorothy Mendez</span></span>
                            <span class="year">28 July 2012</span>
                            <span class="city">Los Angeles</span>
                            <span class="scholl">School of Medicine</span>
                            <span class="department">Developmental Biology</span>
                        </li>

                        <li class="box-content">
                            <span class="user"><img src="assets/images/user8.png" alt=""><span class="label-name">Sandra Dunn</span></span>
                            <span class="year">07 June 2007</span>
                            <span class="city">Jakarta</span>
                            <span class="scholl">School of Environmental Sciences</span>
                            <span class="department">Earth System Science</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user9.png" alt=""><span class="label-name">Steven Warren</span></span>
                            <span class="year">18 June 2013</span>
                            <span class="city">Washington</span>
                            <span class="scholl">School of Engineering</span>
                            <span class="department">Mechanical Engineering</span>
                        </li>
                        <li class="box-content">
                            <span class="user"><img src="assets/images/user10.png" alt=""><span class="label-name">Dorothy Mendez</span></span>
                            <span class="year">28 July 2012</span>
                            <span class="city">Los Angeles</span>
                            <span class="scholl">School of Medicine</span>
                            <span class="department">Developmental Biology</span>
                        </li>
                    </ul>
                </div>
                <div class="pagination-wrapper text-center">
                    <ul class="pagination">
                        <li class="prev"><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="current"><span>3</span></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endsection
