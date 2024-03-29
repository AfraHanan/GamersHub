<?php  
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topbar.php');   
?>


<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add Tournaments</h1>
            </div>

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tournament Details</h6>
                </div>
                

                    <section class="section card mb-5">

                        <div class="card-body">

                            <form action="class.php" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-4 mb-4">
                                        <div class="md-form md-outline">
                                        <label for="tournament_title" class="">Tournament Title</label>
                                        <input type="text" name="tournament_title" id="tournament_title" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <label for="f2" class="">Game Name</label>
                                        <fieldset class="form-check mb-4">
                                            <input class="form-check-input" name="gameName" type="radio" id="Valorant" value="Valorant">
                                            <label class="form-check-label" for="Valorant">Valorant &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <input class="form-check-input" name="gameName" type="radio" id="Call of Duty" value="Call of Duty">
                                            <label class="form-check-label" for="Call of Duty">Call of Duty &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <input class="form-check-input" name="gameName" type="radio" id="GTA V Online" value="GTA V Online">
                                            <label class="form-check-label" for="GTA V Online">GTA V Online &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        </fieldset>
                                    </div>

                                    
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <label for="f2" class="">Tournament Type</label>
                                        <fieldset class="form-check mb-4">
                                        <input class="form-check-input" name="tournamentType" type="radio" id="Free" value="Free">
                                        <label class="form-check-label" for="Free">Free &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <input class="form-check-input" name="tournamentType" type="radio" id="Paid" value="Paid">
                                        <label class="form-check-label" for="Paid">Paid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        </fieldset>
                                    </div>
                                    
                                </div>

                                <!--
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-4">
                                    <label for="f2" class="">Tournament Type</label>
                                        <fieldset class="form-check mb-4">
                                        <input class="form-check-input" name="group1" type="radio" id="radio1" checked="checked">
                                        <label class="form-check-label" for="radio1">Free &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <input class="form-check-input" name="group1" type="radio" id="radio2">
                                        <label class="form-check-label" for="radio2">Paid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        
                                        </fieldset>
                                    </div>
                                </div>
                                -->
                                


                                <div class="row text-left">
                                    <div class="col-md-6 mb-4">
                                        <div class="md-form md-outline">
                                            <label for="tournamentDesc">Tournament Description</label>
                                            <textarea type="text" name="tournamentDesc" id="tournamentDesc" class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-2 mb-4">

                                        <div class="md-form md-outline">
                                        <label for="duration" class="">Tournament Duration</label>
                                        <input type="text" name="duration" id="duration" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-md-2 mb-4">

                                        <div class="md-form md-outline">
                                        <label for="playerCapacity" class="">Player Capacity</label>
                                        <input type="text" name="playerCapacity" id="playerCapacity" class="form-control">
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-2 mb-4">
                                        <label for="trn_featured_image" class="">Upload Featured Image</label>
                                        <input type="file" name="trn_featured_image" class="btn btn-primary">
                                    </div>

                                </div>
                                

                                <button type="submit" name="submit_tournament" class="btn btn-primary">Submit Data </button>

                            </form>





                        </div>

                    </section>



                    

                
            </div>

        






        </div>
    </div>
</div>
  
</body>

</html>
<?php  
 
include('includes/scripts.php');  
include('includes/footer.php'); 
?>
