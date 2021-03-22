<?php
    $currentPage = 'galleryData';
    include 'header-admin.php';
?>
<section>
    <div class="container op " id="box" style=" color:white; padding-top: 30px; margin-top: 40px;">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <h1 style="text-align: center;" class="fadeInUp">Gallery Data Settings</h1>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 10px">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-image">
                            <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Anggota</th>
                                    <th scope="col">Foto Karya</th>                                
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th> <!--id-->
                                    <td>Lorem</td> <!--judul-->
                                    <td> <!--desc-->
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nullam sagittis consequat ipsum, 
                                        non pulvinar nulla sagittis id. 
                                    </td>
                                    <td> <!--anggota-->
                                        <p>Tyo, Bram, Sou</p>
                                    </td>
                                    <td> <!--foto-->
                                        <img src="../src/img/1.jpg" class="img-fluid img-thumbnail">
                                    </td>                          
                                    <td> <!--aksi-->                                  
                                        <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Edit
                                        </button>
                                        <div class="w-100"></div>
                                        <button name="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Hapus
                                        </button>                                                             
                                    </td>                               
                                </tr>
                                <tr>
                                    <th scope="row">2</th> <!--id-->
                                    <td>Lorem</td> <!--judul-->
                                    <td> <!--desc-->
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nullam sagittis consequat ipsum, 
                                        non pulvinar nulla sagittis id. 
                                    </td>
                                    <td> <!--anggota-->
                                        <p>Tyo, Bram, Sou</p>
                                    </td>
                                    <td> <!--foto-->
                                        <img src="../src/img/2.jpg" class="img-fluid img-thumbnail">
                                    </td>                          
                                    <td> <!--aksi-->
                                        <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Edit
                                        </button>
                                        <div class="w-100"></div>
                                        <button name="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Hapus
                                        </button>                             
                                    </td>  
                                </tr>
                                <tr>
                                    <th scope="row">3</th> <!--id-->
                                    <td>Lorem</td> <!--judul-->
                                    <td> <!--desc-->
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nullam sagittis consequat ipsum, 
                                        non pulvinar nulla sagittis id. 
                                    </td>
                                    <td> <!--anggota-->
                                        <p>Tyo, Bram, Sou</p>
                                    </td>
                                    <td> <!--foto-->
                                        <img src="../src/img/3.jpg" class="img-fluid img-thumbnail">
                                    </td>                          
                                    <td> <!--aksi-->
                                        <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px;  border-radius: 5px" >
                                            Edit
                                        </button>
                                        <div class="w-100"></div>
                                        <button name="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Hapus
                                        </button>                                      
                                    </td>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>

        </body>
    </html>

</section>        
