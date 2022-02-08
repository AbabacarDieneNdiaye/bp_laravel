@include('layouts.header')

<div class="container justify-content-center">
    <div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                    <h3 class="panel-title" style="text-transform: uppercase;"><i class="fa fa-money"></i>  Formulaire de creation de Compte</h3>
                    </div>
                    <div class="panel-body">
                        
                    <form method="POST" action="{{ route('persistcompte') }}" id="formCompte">
                        @csrf
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <select class="custom-select form-control input-sm" name="typeCompte" id="typeCompte">
                                        <option value="0" selected>Choisir le type de Compte</option>
                                        <option value="Courant">Compte Courant</option>
                                        <option value="Epargne">Compte Epargne et Xewel</option>
                                        <option value="Bloque">Compte Bloque</option>
                                      </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control input-sm" name="numeroCompte" id="numeroCompte" placeholder="Numero de Compte"/>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control input-sm" name="fraisOuverture" id="fraisOuverture" placeholder="Frais d'Ouverture"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="depotInitial" id="depotInitial" class="form-control input-sm" placeholder="Depot initial"/>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="remuneration" id="remuneration" class="form-control input-sm" placeholder="Remuneration Annuelle"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="agios" id="agios" class="form-control input-sm" placeholder="Agios"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="cni">Date d'Ouverture</label>
                                    <input type="date" name="dateOuverture" id="dateOuverture" class="form-control input-sm" placeholder="date d'Ouverture"/>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="cni">Date de Deblocage</label>
                                    <input type="date" name="dateDeblocage" id="dateDeblocage" class="form-control input-sm" placeholder="date de Deblocage"/>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">	
                                
                                <label for="cni">client associé</label><br>
                                    
                               <!-- <input type="text" class="form-control input-sm" name="searchM" id="searchM"  placeholder="Rechercher..."/> -->
                                
                                <input type="text" class="form-control input-sm" name="search" id="searchP"  placeholder="Saisir le cni ..."/>
                            </div>
                            <div id="result">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="submit" id="valider" name="valider" value="Valider" class="btn btn-success btn-block">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="reset" value="Annuler" class="btn btn-danger btn-block">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
             
                $('#searchP').on('keyup',function() {
                    var query = $(this).val(); 
                    $.ajax({
                       
                        url:"{{ route('search') }}",
                  
                        type:"GET",
                       
                        data:{'searchP':query},
                       
                        success:function (data) {
                          
                            $('#result').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', 'li', function(){
                  
                    var value = $(this).text();
                    $('#searchP').val(value);
                    $('#result').html("");
                });
            });
        </script>

@include('layouts.footer')