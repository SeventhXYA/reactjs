import React from "react";
import { Link } from "react-router-dom";

function Home() {
  return (
    <div className="container">
      <div className="row">
        <div className="col col-12">
          <div className="dashboard">
            <div className="card">
              <div className="title mb-4">
                <h2>
                  <strong style="text-transform: uppercase">DASHBOARD</strong>
                </h2>
              </div>
              <div className="container-fluid">
                <div className="row">
                  <div className="col-lg-3 col-6 text-white">
                    <div className="small-box bg-info">
                      <div className="inner">
                        <h3 className=" text-white"></h3>
                        <p className=" text-white">Jumlah Pengguna</p>
                      </div>
                      <div className="icon">
                        <i className="fa-solid fa-users"></i>
                      </div>
                      <Link to="#" className="small-box-footer text-white">
                        Detail
                        <i className="fas fa-arrow-circle-right text-white"></i>
                      </Link>
                    </div>
                  </div>
                  <div className="col-lg-3 col-6">
                    <div className="small-box bg-yellow-400">
                      <div className="inner">
                        <h3 className=" text-white"></h3>
                        <p className=" text-white">LTT Tertunda</p>
                      </div>
                      <div className="icon">
                        <i className="fa-solid fa-hourglass-start"></i>
                      </div>
                      <Link
                        to="#"
                        className="small-box-footer text-white"
                        style="color: white"
                      >
                        <i className="fas fa-arrow-circle-right text-white"></i>
                      </Link>
                    </div>
                  </div>
                  <div className="col-lg-3 col-6">
                    <div className="small-box bg-success text-white">
                      <div className="inner">
                        <h3 className=" text-white"></h3>
                        <p className=" text-white">LTT Disetujui</p>
                      </div>
                      <div className="icon">
                        <i className="fa-solid fa-thumbs-up"></i>
                      </div>
                      <Link to="#" className="small-box-footer text-white">
                        Detail
                        <i className="fas fa-arrow-circle-right text-white"></i>
                      </Link>
                    </div>
                  </div>
                  <div className="col-lg-3 col-6">
                    <div className="small-box bg-danger text-white">
                      <div className="inner">
                        <h3 className=" text-white"></h3>
                        <p className=" text-white">LTT Ditolak</p>
                      </div>
                      <div className="icon">
                        <i className="fa-solid fa-circle-xmark"></i>
                      </div>
                      <Link to="#" className="small-box-footer text-white">
                        Detail
                        <i className="fas fa-arrow-circle-right text-white"></i>
                      </Link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="row">
              <div className="col-12 col-lg-4 col-md-5">
                <div className="card instant-print pb-0">
                  <div className="title">
                    <h2>
                      <strong>CETAK INSTAN</strong>
                    </h2>
                  </div>
                  <div className="row my-4">
                    <Link to="#" className="info-box mb-3">
                      <span className="info-box-icon bg-danger elevation-1">
                        <i className="fa-solid fa-user"></i>
                      </span>
                      <div className="info-box-content">
                        <span className="info-box-text">
                          <h4>
                            <strong>Self-Development</strong>
                          </h4>
                        </span>
                        <span className="info-box-number">
                          <p>Hari ini: </p>
                        </span>
                      </div>
                    </Link>
                    <Link to="#" className="info-box mb-3">
                      <span className="info-box-icon bg-success elevation-1">
                        <i className="fa-solid fa-money-bill-trend-up"></i>
                      </span>
                      <div className="info-box-content">
                        <span className="info-box-text">
                          <h4>
                            <strong>Bisnis/Profit</strong>
                          </h4>
                        </span>
                        <span className="info-box-number">
                          <p>Hari ini: </p>
                        </span>
                      </div>
                    </Link>
                    <Link to="#" className="info-box mb-3">
                      <span className="info-box-icon bg-yellow-400 elevation-1">
                        <i className="fa-solid fa-building-columns text-white"></i>
                      </span>
                      <div className="info-box-content">
                        <span className="info-box-text">
                          <h4>
                            <strong>Kelembagaan</strong>
                          </h4>
                        </span>
                        <span className="info-box-number">
                          <p>Hari ini: </p>
                        </span>
                      </div>
                    </Link>
                    <Link to="#" className="info-box mb-3">
                      <span className="info-box-icon bg-info elevation-1">
                        <i className="fa-solid fa-pen-ruler"></i>
                      </span>
                      <div className="info-box-content">
                        <span className="info-box-text">
                          <h4>
                            <strong>Inovasi/Creativity</strong>
                          </h4>
                        </span>
                        <span className="info-box-number">
                          <p>Hari ini:</p>
                        </span>
                      </div>
                    </Link>
                  </div>
                </div>
              </div>
              <div className="col-12 col-lg-8 col-md-7">
                <div className="card">
                  <div className="card-header border-0">
                    <div className="d-flex justify-content-between">
                      <h3 className="card-title">Sales</h3>
                      <Link to="#">View Report</Link>
                    </div>
                  </div>
                  <div className="card-body">
                    <div className="d-flex">
                      <p className="d-flex flex-column">
                        <span className="text-bold text-lg">$18,230.00</span>
                        <span>Sales Over Time</span>
                      </p>
                      <p className="ml-auto d-flex flex-column text-right">
                        <span className="text-success">
                          <i className="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span className="text-muted">Since last month</span>
                      </p>
                    </div>
                    <div className="position-relative mb-4">
                      <canvas id="sales-chart" height="200"></canvas>
                    </div>
                    <div className="d-flex flex-row justify-content-end">
                      <span className="mr-2">
                        <i className="fas fa-square text-primary"></i> This year
                      </span>
                      <span>
                        <i className="fas fa-square text-gray"></i> Last year
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="dashboard">
              <div className="card">
                <div className="title">
                  <h2 className="mb-2">Selamat Datang</h2>
                  <p>
                    Kamu memiliki rencanLink yang belum terpenuhi. Silahkan cek
                    <b>disini</b> untuk lebih lanjut
                  </p>
                </div>
              </div>
            </div>
            <div className="row -mb-6">
              <div className="col-12 col-lg-4 col-md-5">
                <div className="card instant-print pb-0"></div>
              </div>
              <div className="col-12 col-lg-8 col-md-7">
                <div className="card">
                  <div className="card-header border-0">
                    <div className="d-flex justify-content-between">
                      <h3 className="card-title">Sales</h3>
                      <Link to="#">View Report</Link>
                    </div>
                  </div>
                  <div className="card-body">
                    <div className="d-flex">
                      <p className="d-flex flex-column">
                        <span className="text-bold text-lg">$18,230.00</span>
                        <span>Sales Over Time</span>
                      </p>
                      <p className="ml-auto d-flex flex-column text-right">
                        <span className="text-success">
                          <i className="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span className="text-muted">Since last month</span>
                      </p>
                    </div>
                    <div className="position-relative mb-4">
                      <canvas id="sales-chart" height="200"></canvas>
                    </div>

                    <div className="d-flex flex-row justify-content-end">
                      <span className="mr-2">
                        <i className="fas fa-square text-primary"></i> This year
                      </span>

                      <span>
                        <i className="fas fa-square text-gray"></i> Last year
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Home;
