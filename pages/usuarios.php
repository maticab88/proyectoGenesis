<?php 
    include 'conexion.php';
    include 'menu.php';
?>

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Coutas</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Numero</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Monto</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Estado</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0 text-center">1</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">9850</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">pagado</p>
                      </td>
                      <!-- <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td> -->
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>