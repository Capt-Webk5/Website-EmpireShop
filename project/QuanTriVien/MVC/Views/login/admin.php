<div class="row">
          <!-- ./col -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doanh Thu Tháng</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($data_countM['Count'] ?? 0) ?> VNĐ</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Doanh Thu Năm -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doanh Thu Năm </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($data_countY['Count'] ?? 0) ?> VNĐ</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- Người Dùng -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Người Dùng</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_nguoidung['Count'] ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Nhân Viên -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nhân Viên</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_nhanvien['Count'] ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Đồng Hồ Nam -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Đồng Hồ Nam</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data_tkdonghonam['Count']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clock fa-2x" ></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Đồng Hồ Nữ -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Đồng Hồ Nữ</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data_tkdonghonu['Count']?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clock fa-2x" ></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Đồng Hồ Cặp Đôi -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Đồng Hồ Cặp Đôi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data_tkdonghocapdoi['Count']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clock fa-2x" ></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Hoá Đơn Chưa được Duyệt -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Hoá Đơn Chưa Phê Duyệt</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data_hd['Count']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

