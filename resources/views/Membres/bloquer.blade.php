@extends('layouts.modelGet2gether')

@section('title', 'Vos bloques')

@section('content')

<section>        
    <div id="connectBox"> </div>
          <div id="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="container2">
                          <h2 class="col-xl-12 text-left">Vos bloqués</h2>
                          </div><br/><br/><br/><br/>
                          <div class="form-group">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Date</th>
          <th>Image</th>
          <th>Pseudo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox"></td>
          <td>8 fevrier 2021 a 8am</td>
          <td>David72.jpeg</td>
          <td>David72</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>9 Mars 2021 a 8am</td>
          <td>Natally44.jpeg</td>
          <td>Natally44</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>18 Octobre 2021 a 8am</td>
          <td>July22.jpeg</td>
          <td>July22</td>
        </tr>
      </tbody>
    </table>
               <div id="btnNav4"><button class="btnSauvegarder">DÉBLOQUER&nbsp;</button></div>
                
              </div>
      </div>
              </div>
      </div>
              
              
  
      
    </form>
    </div>
  </section>

@endsection
 