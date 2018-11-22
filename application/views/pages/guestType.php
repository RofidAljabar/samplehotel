

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        GUEST TYPE
        <small>MASTER DATA</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-database"></i> MASTER DATA</li>
        <li style="text-transform: uppercase;"><i class="fa fa-user-circle"></i> GUEST TYPE</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs tabsParticipant">
            
            <li
                  <?php if ($this->session->flashdata('active') == 'type') {
                    echo "class='active'";}?>
                  ><a href="#tab_1" data-toggle="tab"><i class="fa fa-check "></i> Guest Type</a>
            </li>

            <li <?php if ($this->session->flashdata('active') == 'detail') {
                echo "class='active'";}?>><a href="#tab_2" data-toggle="tab"><i class="fa fa-check-square-o"></i> Detail</a>
            </li>


            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
              <div class="tab-pane 
              <?php if ($this->session->flashdata('active') == 'type') {
                echo "active";}?> " id="tab_1">
                <form role="form" action="<?php echo base_url('home/addguestType'); ?>" method="post">

                  <!-- input for active tabs -->
                    <input type="hidden" name="active" value="active">

                        <div class="box-body">
                          <div class="form-group col-xs-3 ">
                            <label for="TypeRoom">Type Guest</label>
                            <input type="text" name="guest_type" class="form-control" id="guest_type" placeholder="Guest Type" required>
                          </div>

                        </div>
               
                    <!-- /.box-body -->

                    <div class="box-footer with-border">
                      <!-- Submit Type -->
                      <button type="submit" class="btn btn-primary btn-sm" name="submitType"><i class="fa fa-plus"></i> ADD</button>
                      <br /><br /><br />
                      <div class="row">
                         <div class="col-md-12">
                            <div class="box box-danger">
                              <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-database"></i> Data Guest Type</h3>
                              </div>

                              <div class="box-body">
                                <table id="tableDetailsTypeRoom" class="table table-bordered table-hover table-condensed">
                                  <thead>
                                    <tr>
                                      <!-- <th>No.</th> -->
                                      <th>Type Guest</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <?php 
                                     if(! empty($gt)){
                                      $no = 1;
                                        foreach ($gt as $key) {
                                          $id_guest_type = $key['id_guest_type'];
                                          $guest_type = $key['guest_type'];
                                          // $price = $key['price'];
                                         
                                          ?>
                                          <tr style="text-transform: uppercase;">
                                            <!-- <td id="guestTypeNumb"> <?php //echo $no++;?></td> -->
                                            <td> <?php echo $key['guest_type'];?> </td>
                                            <!-- <td> Rp. <?php echo number_format($key['price']);?> </td> -->
                                            <td> 
                                              <button type="button" class="btn btn-info btn-sm" title="Edit Guest Type" onclick="ubahGuestType(<?php echo $id_guest_type; ?>)"><i class="fa fa-edit"></i></button> 
                                              <button type="button" class="btn btn-danger btn-sm" title="Delete Guest Type" onclick="removeGuestType(<?php echo $id_guest_type ?>)"><i class="fa fa-trash"></i></button>
                                            </td>
                                            <!-- <td> <?php echo $key['personal_mobile_phone1']; ?></td> -->
                                          </tr>
                                         <!--  echo "<tr>";
                                          echo "<td>".$key['personal_full_name']."</td>";
                                          echo "<td>".$key['personal_mobile_phone1']."</td>";
                                          echo "<td>".$key['personal_mobile_phone2']."</td>";
                                          echo "</tr>"; -->
                                        <?php }
                                      } else {
                                        echo "<tr><td align='center' colspan='5'>Data Not Available </td></tr>";
                                      }
                                      ?>
                                    </div>
                </form>

                                <div id="editGuestTypeModal" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/updateGuestType'); ?>" method="post">
                                      <div class="modal-dialog">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Type Guest</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">
                                            <div class="col-sm-12">
                                              <div class="form-group">
                                                <label for="TypeRoom">Type Guest</label>
                                                <input type="hidden" name="id_type_guest" id="id_type_guest_modal">
                                                <input type="text" class="form-control" id="idDscTipe" name="type_guest_edit" />
                                              </div>
                                            </div>

                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->
                                            <button type="submit" class="btn btn-sm btn-primary" name="submitCompany"><i class="fa fa-refresh"></i> Update</button>
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                                </div>
                                  </div>
                                </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane <?php if ($this->session->flashdata('active') == 'detail') {
                echo "active";}?>" id="tab_2">
                <form role="form" action="<?php echo base_url('home/addviewGuestTypeDetail'); ?>" method="post">
                        
                <!-- input for active tabs -->
                    <input type="hidden" name="active" value="active">


                        <div class="box-body">

                          <div class="form-group col-xs-4">
                              <label for="TypeRoom">Type Guest</label>
                                <select name="detail_type_guest" id="selectDetailTypeGuest" onchange="detailTypeGuestChange(this)" class="form-control" required style="text-transform: uppercase;">
                                   <?php 
                                      foreach ($gtd as $key) {
                                        echo "<option value='".htmlspecialchars($key['guest_type'])."'>";
                                        echo $key['guest_type'];
                                        echo "</option>";
                                      }
                                    ?>
                                </select>
                            </div>

                          <div class="form-group col-xs-4">
                            <label for="Detail">Detail</label>
                            <input type="text" name="detail" class="form-control" id="detail" placeholder="Enter Detail" required>
                          </div>

                          <div class="form-group col-xs-4">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price" required>
                          </div>
                    
                    
                    </div>
               
                    <!-- /.box-body -->

                    <div class="box-footer with-border">
                      <!-- Submit Fasilitas -->
                      <button type="submit" class="btn btn-primary btn-sm" name="submitFacilities"><i class="fa fa-plus"></i> ADD</button>
                      <br /><br /><br />
                      <div class="row">
                         <div class="col-md-12">
                            <div class="box box-danger">
                              <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-database"></i> Data Detail</h3>
                              </div>

                              <div class="box-body">
                                <table id="tableDetailTypeGuest" class="table table-bordered table-hover table-condensed">
                                  <thead>
                                    <tr>
                                      <!-- <th>No.</th> -->
                                      <th>Type Guest</th>
                                      <th>Detail</th>
                                      <th>Price</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <?php 
                                     if(! empty($vgtd)){
                                      $no = 1;
                                        foreach ($vgtd as $key) {
                                          $id_detail_guest_type = $key['id_detail_guest_type'];
                                          $detail_type_guest = $key['detail_type_guest'];
                                          $detail = $key['detail'];
                                          $price = $key['price'];
                                         
                                          ?>
                                          <tr>
                                            <!-- <td> <?php //echo $no++;?></td> -->
                                            <td> <?php echo $key['detail_type_guest'];?> </td>
                                            <td> <?php echo $key['detail'];?> </td>
                                            <td> Rp.<?php echo number_format($key['price']);?></td>

                                            <td> 
                                              <button type="button" class="btn btn-info btn-sm" title="Edit Detail" onclick="ubahDetailGuestType(<?php echo $id_detail_guest_type; ?>)"><i class="fa fa-edit"></i></button> 
                                              <button type="button" class="btn btn-danger btn-sm" title="Delete Detail" onclick="removeDetailGuestType(<?php echo $id_detail_guest_type ?>)"><i class="fa fa-trash"></i></button>
                                            </td>
                                            <!-- <td> <?php echo $key['personal_mobile_phone1']; ?></td> -->
                                          </tr>
                                         <!--  echo "<tr>";
                                          echo "<td>".$key['personal_full_name']."</td>";
                                          echo "<td>".$key['personal_mobile_phone1']."</td>";
                                          echo "<td>".$key['personal_mobile_phone2']."</td>";
                                          echo "</tr>"; -->
                                        <?php }
                                      } else {
                                        echo "<tr><td align='center' colspan='5'>Data Not Available </td></tr>";
                                      }
                                      ?>

                                  </form>
                                     </div>
                                  </div>
                                </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
              </div>

                                <div id="editModalDetailGuestType" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/updateDetailGuestType'); ?>" method="post">
                                      <div class="modal-dialog">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Detail Guest Type</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="form-group col-xs-12">
                                            <label for="TypeRoom">Type Guest</label>
                                            <input type="hidden" name="id_detail_guest_type" id="id_detail_guest_type">
                                              <select name="select_detail_type_guest_modal" id="selectDetailTypeGuest_modal" onchange="detailTypeGuestChange(this)" class="form-control" required style="text-transform: uppercase;">
                                                 <?php 
                                                    foreach ($gtd as $key) {
                                                      echo "<option value='".htmlspecialchars($key['guest_type'])."'>";
                                                      echo $key['guest_type'];
                                                      echo "</option>";
                                                    }
                                                  ?>
                                              </select>
                                          </div>
                                          <div class="form-group col-xs-12">
                                            <label for="TypeRoom">Detail</label>
                                            <input type="text" class="form-control" id="detail_type_guest_modal" name="detail_type_guest_modal" />
                                          </div>
                                          <div class="form-group col-xs-4">
                                            <label >Price</label>
                                            <input type="text" class="form-control" id="price_edit" name="price_edit" />
                                            <br/>
                                            <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->
                                            
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                                </div>

                               <div id="myModal1" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/addRoom'); ?>" method="post">
                                      <div class="modal-dialog">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add Facilities</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">
                                            <table id="tableDetailsFasilitas" class="table table-bordered table-hover table-condensed">
                                  <thead>
                                    <tr>
                                      <th>Number</th>
                                      <th>Room Facilities</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <?php 
                                     if(! empty($fasilitas)){
                                      $no = 1;
                                        foreach ($fasilitas as $key) {
                                          $id_fasilitas = $key['id_fasilitas'];
                                          $dsc_fasilitas = $key['dsc_fasilitas'];
                                         
                                          ?>
                                          <tr>
                                            <td> <?php echo $no++;?></td>
                                            <td> <?php echo $key['dsc_fasilitas'];?> </td>
                                            <td> 
                                              <!-- <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Show</button> -->
                                              <button type="button" class="btn btn-info" onclick="ubahFasilitas(<?php echo $id_fasilitas; ?>)">Edit</button> 
                                              <button type="button" class="btn btn-danger" onclick="removeFasilitas(<?php echo $id_fasilitas ?>)"> Remove </button></td>
                                            <!-- <td> <?php echo $key['personal_mobile_phone1']; ?></td> -->
                                          </tr>
                                         <!--  echo "<tr>";
                                          echo "<td>".$key['personal_full_name']."</td>";
                                          echo "<td>".$key['personal_mobile_phone1']."</td>";
                                          echo "<td>".$key['personal_mobile_phone2']."</td>";
                                          echo "</tr>"; -->
                                        <?php }
                                      } else {
                                        echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                                      }
                                      ?>

                                  </form>
                                     </div>
                                  </div>
                                </tbody>
                                </table>
                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->
                                            <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                </div>
                <div class="tab-pane <?php if ($this->session->flashdata('active') == 'room') {
                echo "active";}?>" id="tab_3">
                  <form role="form" action="<?php echo base_url('home/addRoom'); ?>" method="post">

                    <!-- input for active tabs -->
                    <input type="hidden" name="active" value="active">

                    <div class="box-body">
                      <div class="form-group col-xs-6">
                        <label for="roomInput">Name Room</label>
                        <input type="text" name="name_room" class="form-control" id="roomInput" placeholder="Enter Name Room" required>
                      </div>

                      <div class="form-group col-xs-6">
                        <label for="TypeRoom">Type Room</label>
                          <select name="type_room" class="form-control" required>
                             <?php 
                                foreach ($typroom as $key) {
                                  echo "<option value='".htmlspecialchars($key['dsc_tipe'])."'>";
                                  echo $key['dsc_tipe'];
                                  echo "</option>";
                                }
                              ?>
                          </select>
                      </div>

                      <div class="form-group col-xs-6">
                        <label for="NoofRoom">No of Room</label>
                        <input type="text" name="no_of_room" class="form-control" id="NoofRoom" placeholder="Enter No Of Room" required>
                      </div>

                      <!-- <div class="form-group col-xs-6 ">
                        <label for="PriceRoom">Price Room</label>
                        <input type="text" name="price_room" class="form-control" id="PriceRoom" placeholder="Enter Price Room" required>
                      </div> -->
                      
                      <div class="form-group col-xs-6 ">
                        <label for="maxPerson">Max. Person Per Room</label>
                        <input type="text" name="max_person_room" class="form-control" id="maxPerson" placeholder="Enter Max Person Per Room" required>
                      </div>

                  <!-- ****************START CHECK BOX NEW**************** -->
                      <!-- <div class="form-group row">
                        <div class="col-xs-6"><label>Facility</label></div>
                        <div class="col-xs-6">
                          <div class="form-check">
                            <class="form-check-label" for="gridCheck1">
                          <?php
                    //       foreach ($dfasilitas as $key) {
                    // echo "<input type=\"checkbox\" name=\"fasilitas[]\" value=".$key['dsc_fasilitas']." >  ".$key['dsc_fasilitas'];
                    //         } 
                          ?>
                            
                          </div>
                        </div>
                      </div> -->

                  <!-- ****************END OF CHECKBOX NEW**************** -->                
                     <!--  <div class="form-group col-xs-6 ">
                        <label for="birthDateInput">Birth Date</label>
                        <input type="text" name="birthDate" class="form-control" id="birthDateInput" placeholder="Enter birth date" required>
                      </div>
                  
                    </div>
                    <!-- /.box-body -->
                        
                    </div>
                    <div class="box-footer with-border">
                      <!-- Submit Room -->
                      <button type="submit" class="btn btn-primary" name="submitRoom">Submit</button>
                      <br /><br />
                      <div class="row">
                         <div class="col-md-12">
                            <div class="box box-success">
                              <div class="box-header with-border">
                                                
                                <h3 class="box-title"><i class="fa fa-database"></i> Data Room</h3>
                              </div>

                              <div class="box-body">
                                <table id="tablePersonalData" class="table table-bordered table-hover table-condensed">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Name Room</th>
                                      <th>Type Room</th>
                                      <th>No. Of Room</th>
                                      <!-- <th>Price Room</th> -->
                                      <th>Max. Person per Rooom</th>
                                      <!-- <th>Fasilitas</th> -->
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                                     if(! empty($room)){
                                      $no = 1;
                                        foreach ($room as $key) {
                                          $id_room = $key['id_room'];
                                          $name_room = $key['name_room'];
                                          $type_room = $key['type_room'];
                                          $no_of_room = $key['no_of_room'];
                                          // $price_room = $key['price_room'];
                                          $max_person_room = $key['max_person_room'];
                                          $fasilitas = $key['fasilitas']
                                         
                                          ?>
                                          <tr>
                                            <td> <?php echo $no++;?></td>
                                            <td> <?php echo $key['name_room'];?> </td>
                                            <td> <?php echo $key['type_room'];?> </td>
                                            <td> <?php echo $key['no_of_room'];?> </td>
                                            <!-- <td> Rp.<?php echo $key['price_room']; ?> </td> -->
                                            <td> <?php echo $key['max_person_room'];?> </td>
                                            <!-- <td> Rp.<?php echo number_format($key['price_room']) ?> </td> -->
                                            <!-- <td> <?php echo $key['fasilitas'];?> </td> -->
                                            <td> 
                                              <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Facilities</button> -->
                                              <button type="button" class="btn btn-info" onclick="getDetFasilitas(<?php echo $id_room ?>)">View</button>
                                              <button type="button" class="btn btn-info" id="clear" onclick="addSubFasilitasNew(<?php echo $id_room ?>)">Add Main Facilities</button>
                                              <button type="button" class="btn btn-info" onclick="ubahRoom(<?php echo $id_room ?>)">Edit</button> 
                                              <button type="button" class="btn btn-danger" onclick="removeRoom(<?php echo $id_room ?>)"> Remove </button>
                                            </td>
                                          </tr>
                                         <!--  echo "<tr>";
                                          echo "<td>".$key['personal_full_name']."</td>"; 
                                          echo "<td>".$key['personal_mobile_phone1']."</td>";
                                          echo "<td>".$key['personal_mobile_phone2']."</td>";
                                          echo "</tr>"; -->
                                        <?php }
                                      } else {
                                        echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                                      }
                                    ?>
                  </form>
                                <div id="vFasilitas" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/'); ?>" method="post">
                                      <div class="modal-dialog">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Master Type Room</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">
                                            <!-- <input type="hidden" name="id_room_v" id="idRoomV"> -->
                                                <input type="hidden" name="id_rooms_v" id="idRooms_v">
                                                <div id="testTampil"></div>
                                                     
                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <!-- <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button> -->
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                                </div>
                                
                  <div id="myModal" class="modal fade" role="dialog">
                        <!-- <form role="form" action="<?php //echo base_url('home/addFasilitasRoom'); ?>" method="post"> -->
                                      <div class="modal-dialog">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add Facilities</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">
                                  <div class="row">
                                    <!-- Col 1 -->
                                    <div class="col-sm-12">
                                      <input type="hidden" name="id_room_f" id="idRoomF">
                                      <input type="hidden" name="id_fasilitas_f" id="idFasilitasF">
                                      <input type="hidden" name="id_detail_f" id="idDetailF">
                                      <div class="form-group">
                               <?php
                                $previous = '';
                                foreach ($dfasilitas as $object) {  
                                  $current = $object['id_fasilitas'];
                                  if($current <> $previous ){
                                    echo "<div class=\"col-sm-12\">";
                                  echo "<label name=\"mfasilitas\" class=\"text-info\" value=".$object['id_fasilitas'].">".$object['dsc_fasilitas']."</label><br/>";   
                                    echo "</div>";
                                }
                                    echo "<div class=\"col-sm-3\">";
                                  echo "<input type=\"checkbox\" class=\"form-check-input\" name=\"fasilitas[]\" id=\"fasilitas\" value=".$object['id_detail'].">&nbsp;".$object['dsc_detail'];
                                  $previous = $current;
                                    echo "</div>"; 
                                 } 
                                ?>
                                      </div>
                                    </div>
                                   <!-- <div class="col-sm-5">
                                      <div class="form-group">
                                           <input type="hidden" name="id_rooms" id="idRooms" value="<?php echo $id_room ?>"> -->
                                            <!-- <?php
                                              // foreach ($dsubfasilitas as $key) {
                                              //   echo "<input type=\"checkbox\" name=\"fasilitas[]\" id=\"fasilitas\" value=".$key['id_detail'].">".$key['dsc_detail']."<br/>";
                                              // }
                                            ?> -->
                                      <!-- </div>
                                    </div> --> 
                                  </div>
                                  <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary" onclick="stay()">Submit</button>
                                  <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <!-- </form> -->
                  </div>
                </div>
              </div>
            </div>
                  </div>
                              
                                    <!-- Potongan Script -->
                                </tbody>
                                </table>
                              </div>
                            </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->
                                            <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                                          </div>
                          
                        </form>
                </div>  
                   <div class="col-sm-12" width="60px">
                      <br/>
                      <div id="editModalRoom" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updateRoom'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Update Hotel Information</h4>
                            </div>
                            <!-- hidden id hotel -->
                            <input type="hidden" name="id_room" id="idRoom">
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <!-- Col 1 -->
                                    <div class="col-sm-9">
                                      <div class="form-group">
                                        <label>Name Room</label>
                                        <select id="idNameRoom" name="name_room_edit" class="form-control" />
                                            <?php 
                                                foreach ($room as $key) {
                                                  echo "<option value='".htmlspecialchars($key['name_room'])."'>";
                                                  echo $key['name_room'];
                                                  echo "</option>";
                                                }
                                            ?>
                                          </select>
                                        <!-- <input type="text" class="form-control" id="idNameRoom" name="name_room_edit"> -->
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="TypeRooms">Type Room</label>
                                          <select id="idTypeRoom" name="type_room_edit" class="form-control" />
                                            <?php 
                                                foreach ($typroom as $key) {
                                                  echo "<option value='".htmlspecialchars($key['dsc_tipe'])."'>";
                                                  echo $key['dsc_tipe'];
                                                  echo "</option>";
                                                }
                                            ?>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="NoOfRooms">No. Of Room</label>
                                        <input type="text" class="form-control" id="idNoOfRoom" name="no_of_room_edit" />
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="PriceRooms">Price Rooms</label>
                                        <input type="text" class="form-control" id="idPriceRoom" name="price_room_edit" />
                                      </div>
                                    </div>
                                      <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="MaxPersonRooms">Max Person Room</label>
                                        <input type="text" class="form-control" id="idMaxPerson" name="max_person_room_edit" />
                                      </div>
                                      </div>

                                      <!-- <div class="col-sm-4">
                                      <div class="form-group">
                                      <input type="hidden" name="id_fasilitas" id="idFasilitas">
                                            <?php
                                              foreach ($dsubfasilitas as $key) {
                                                echo "<input type=\"checkbox\" name=\"fasilitas[]\" value=".$key['dsc_detail'].">".$key['dsc_detail']."";
                                              }
                                            ?>
                                      </div>
                                      </div> -->
                                  </div>

                                  </div>
                                  <div class="modal-footer">
                                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>  -->
                                  <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                                </form>
                                </div>
                              </div>
                              
                                    <!-- Potongan Script -->
                                </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>

        <!-- Contact Person -->
       
      

      <!-- /.row (main row) -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
