@extends('logística.layouts.master')
@section('main')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Produtos</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Novo
              </button>

        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Produtos</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                        <td>

                                            <button type="button" class="btn btn-success">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Bridie Kessler</td>
                                        <td>Developer</td>
                                        <td>35</td>
                                        <td>2014-12-05</td>
                                        <td>

                                            <button type="button" class="btn btn-success">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Ashleigh Langosh</td>
                                        <td>Finance</td>
                                        <td>45</td>
                                        <td>2011-08-12</td>
                                        <td>

                                            <button type="button" class="btn btn-success">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Angus Grady</td>
                                        <td>HR</td>
                                        <td>34</td>
                                        <td>2012-06-11</td>
                                        <td>

                                            <button type="button" class="btn btn-success">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Raheem Lehner</td>
                                        <td>Dynamic Division Officer</td>
                                        <td>47</td>
                                        <td>2011-04-19</td>
                                        <td>
                                            <button type="button" class="btn btn-success">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="basicModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Basic Modal</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                    {{-- form contents --}}
                    <form>

                        <div class="row mb-3">
                          <label for="inputText" class="col-sm-2 col-form-label">Referência</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Código de barra</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Fornecedor</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Nenhum</option>
                                    <option value="1">Fornecedor 1</option>
                                    <option value="2">Fornecedor 2</option>
                                    <option value="3">Fornecedor 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                          <label for="inputText" class="col-sm-2 col-form-label">Título do produto</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Descrição</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" style="height: 100px"></textarea>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Preço de compra</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Preço de venda</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control">
                            </div>
                          </div>

                        <div class="row mb-3">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control">
                          </div>
                        </div>
                       
                        
                        </div>
                        <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control">
                          </div>
                        </div>
                        
        
                       
                        
                       
                        
        
                       
        
                        
        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Multi Select</label>
                          <div class="col-sm-10">
                            <select class="form-select" multiple aria-label="multiple select example">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Submit Button</label>
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                          </div>
                        </div>
        
                      </form><!-- End General Form Elements -->
        
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div><!-- End Basic Modal-->
    </main>
@endsection
