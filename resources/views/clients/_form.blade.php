
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card text-center">
            <div class="card-header bg-primary text-white">Informations Pharmacien</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="pharmacien"> Nom Et Prenom:</label>
                            <input type="text" class="form-control @error('pharmacien') is-invalid @enderror" name="pharmacien" id="pharmacien"
                            value="{{ old('nom', $client->pharmacien ?? null) }}"  autofocus >
                            @error('pharmacien')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                             @enderror
                        </div>
                       
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cin_pharmacien">Cin  :</label>
                            <input type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" id="cin"
                            value="{{ old('cin', $client->cin ?? null) }}"  autofocus >
                        
                        @error('cin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact">Contact :</label>
                            <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" id="contact"
                            value="{{ old('contact', $client->contact ?? null) }}"     >
                        
                        @error('contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                    </div>
                </div>
            </div>
        </div>
          
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card text-center">
            <div class="card-header bg-primary text-white"> Pharmacie</div>
            <div class="card-body">
           
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nom">Nom de Pharmacie :</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom"
                            value="{{ old('nom', $client->nom ?? null) }}"  autofocus >
                            @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="patente">patente :</label>
                            <input type="text" class="form-control @error('patente') is-invalid @enderror" name="patente" id="patente"
                            value="{{ old('patente', $client->patente ?? null) }}"     >
                            @error('patente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ice">ICE :</label>
                            <input type="text" class="form-control @error('ice') is-invalid @enderror" name="ice" id="ice"
                            value="{{ old('ice', $client->ice ?? null) }}"     >
                            @error('ice')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                </div>
        
        
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="i_f">IF  :</label>
                            <input type="text" class="form-control @error('i_f') is-invalid @enderror" name="i_f" id="i_f"
                            value="{{ old('i_f', $client->i_f ?? null) }}"  autofocus >
                            @error('i_f')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rc">RC :</label>
                            <input type="text" class="form-control @error('rc') is-invalid @enderror" name="rc" id="rc"
                            value="{{ old('rc', $client->rc ?? null) }}" >
                            @error('rc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="autorisation">N°D'autorisation</label>
                            <input type="text" class="form-control @error('autorisation') is-invalid @enderror" name="autorisation" id="autorisation"
                            value="{{ old('autorisation', $client->autorisation ?? null) }}" >
                            @error('autorisation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
    </div>
</div>

<hr>

<hr>
<div class="row">
    <div class="col-md-6 col-sm-12">

        <div class="card text-center">
            <div class="card-header bg-primary text-white">Adresse de Pharmacie</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="ville">Ville:</label>
                           
                            <select class="form-control @error('ville') is-invalid @enderror" name="ville" id="ville"  >
                                <option value=""></option>
                                @foreach ($villes as $ville)
                                 <option value="{{ $ville->id }}" {{ old('ville') === $ville ? 'selected':'' }} >{{ $ville->nom }}</option>
                                    
                                @endforeach
                            </select>
                            @error('ville')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="adress">Adress:</label>
                          <textarea class="form-control @error('adress') is-invalid @enderror" name="adress" id="adress" rows="3">
                            {{ old('adress', $client->adress ?? null) }}
                          </textarea>
                          @error('adress')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card text-center">
            <div class="card-header bg-primary text-white">Document de Pharmacie</div>
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-12">
                        
                              <div class="form-group">
                                
                                <input type="file" class="form-control-file" name="fichier" id="fichier">
                              </div>
                             
                           
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12 mb-2">
                       <div class="form-check ">
                         <label class="form-check-label ml-0">
                           <input type="checkbox" class="form-check-input" name="fichier_cin" id="fichier_cin" value="1">
                           CIN Pharmacien
                         </label>

                         <label class="form-check-label ml-5">
                            <input type="checkbox" class="form-check-input" name="fichier_diplome" id="fichier_diplome" value="1">
                            Diplome Pharmacien
                          </label>

                         
                       </div></div>
                       <div class="col-md-12">
                        <div class="form-check ">
                            <label class="form-check-label mr-5">
                                <input type="checkbox" class="form-check-input" name="fichier_autorisation" id="fichier_autorisation" value="1">
                                Autorisation
                              </label>
                          <label class="form-check-label mr-5">
                            <input type="checkbox" class="form-check-input" name="fichier_rc_patent" id="fichier_rc_patent" value="1">
                            RC et PATENTE
                          </label>

                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="fichier_if_ice" id="fichier_if_ice" value="1">
                            IF et ICE
                          </label>
                       </div>
                    </div>
                 
                </div>



            </div>
        </div>
          
    </div>
</div>

<hr>
<div class="row">
    <div class="col-md-6 ">
        
    
    <div class="form-check">
        <label class="form-check-label">
        <input type="radio" class="form-check-input" id="bloque" onclick="showHide(1);" name="bloque"  value="1" >
        Bloque
      </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
        <input type="radio" class="form-check-input" id="debloque" onclick="showHide(0);" name="bloque"  value="0" checked>
        Debloque
      </label>
    </div>
</div>
<div class="col-md-6" id="showMotif">
    <div class="form-group">
        <label for="motif">Motif :</label>
        <input type="text" class="form-control @error('motif') is-invalid @enderror" name="motif" id="motif"
        value="{{ old('motif', $client->motif ?? null) }}"  autofocus >
        @error('motif')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>
</div>



