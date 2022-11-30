import React from "react";
import { Link } from "react-router-dom";

function Navbar() {
  return (
    <>
      <nav className="navbar" id="header">
        <div className="container">
          <div className="left">
            <div className="button-helper">
              <button
                className="header-menu-mobile"
                data-bs-toggle="modal"
                data-bs-target="#sidebar-menu"
              >
                <i
                  className="fa-sharp fa-solid fa-bars"
                  style="color: #ffffff;"
                ></i>
              </button>
            </div>
            <div className="img-helper">
              <img src="{{ asset('/') }}img/Linkrutmin.png" alt="" />
            </div>
            <div id="title">
              <h1>KOPERASI BINA USAHA PERMATA</h1>
            </div>
          </div>
          <div id="header-mainmenu">
            <div className="dropdown dim" id="notif">
              <div
                className="modal fade"
                id="menu-notif"
                tabindex="-1"
                aria-hidden="true"
              >
                <div id="notif-dialog" className="modal-dialog">
                  <div id="notif-content" className="modal-content">
                    <button
                      type="button"
                      className="btn closebtn"
                      data-bs-dismiss="modal"
                    ></button>
                  </div>
                </div>
              </div>
            </div>
            <div className="dropdown dim" id="menu">
              <div
                className="modal fade"
                id="menu-menu"
                tabindex="-1"
                aria-hidden="true"
              >
                <div id="menu-dialog" className="modal-dialog">
                  <div id="menu-content" className="modal-content">
                    <button
                      type="button"
                      className="btn closebtn"
                      data-bs-dismiss="modal"
                    >
                      <i className="fa-sharp fa-solid fa-xmark navcls"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div className="dropdown dim" id="profile">
              <button
                className="dropdown-toggle"
                id="toggle-profile"
                role="button"
                data-bs-toggle="modal"
                data-bs-target="#menu-profile"
              >
                <div className="profile-img no-photo">
                  <div className="helper" style="background-color:#4a3e44">
                    <img src="{{ asset('/') }}img/user.png" alt="" />
                  </div>
                </div>
              </button>
              <div
                className="modal fade"
                id="menu-profile"
                tabindex="-1"
                aria-hidden="true"
              >
                <div id="profile-dialog" className="modal-dialog">
                  <div id="profile-content" className="modal-content">
                    <button
                      type="button"
                      className="btn closebtn"
                      data-bs-dismiss="modal"
                    >
                      <i className="fa-sharp fa-solid fa-xmark navcls"></i>
                    </button>
                    <div className="scroll-wrapper">
                      <div className="header">
                        <div className="profile">
                          <div className="profile-img no-photo">
                            <div
                              className="helper"
                              style="background-color:#4a3e44"
                            >
                              <img src="{{ asset('/') }}img/user.png" alt="" />
                            </div>
                          </div>
                          <div>
                            <h4 style="text-transform: uppercase"></h4>
                            <Link href="#" target="_blank">
                              Lihat Profil
                              <i
                                className="fa-solid fa-arrow-right"
                                style="color: #010f87;"
                              ></i>
                            </Link>
                          </div>
                        </div>
                      </div>
                      <ul className="menu-group">
                        <li className="menu-item">
                          <Link href="/dailyrecord">Rekap Harian</Link>
                        </li>
                        <li className="menu-item">
                          <Link href="{{ route('weekly.history') }}">
                            Rekap Mingguan
                          </Link>
                        </li>
                        <li className="menu-item">
                          <Link href="#">Rekap Bulanan</Link>
                        </li>
                      </ul>
                      <div className="footer">
                        <div className="menu-footer">
                          <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                              type="submit"
                              className="logout"
                              id="logout"
                            >
                              <i
                                className="fa-solid fa-right-from-bracket"
                                style="color: rgb(182, 0, 0);"
                              ></i>
                              Keluar
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <nav className="navbar navbar-expand-xl" id="menu">
        <div className="container">
          <div className="collapse navbar-collapse">
            <ul className="navbar-nav">
              <li className="nav-item">
                <Link
                  className="nav-link active"
                  aria-current="page"
                  href="/siakad/home"
                >
                  Beranda
                </Link>
              </li>
              <li className="nav-item">
                <Link
                  className="nav-link"
                  aria-current="page"
                  href="/siakad/home"
                >
                  Monthly Target
                </Link>
              </li>
              <li className="nav-item dropdown">
                <Link
                  className="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Weekly
                  <span className="dropdown-arrow"></span>
                </Link>
                <div
                  className="dropdown-menu"
                  onmouseleave="noThirdLevel(this)"
                >
                  <div className="wrapper">
                    <h5 className="sub-menu">DI ISI SETIAP HARI JUM'AT</h5>
                    <ul className="item-wrapper">
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/siakad/set_krsmhs"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Weekly Plan</h4>
                            <h5>Tentukan rencanLink minggu depan</h5>
                          </div>
                        </Link>
                      </li>
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/siakad/set_krs"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Weekly Report</h4>
                            <h5>Laporkan kegiatan andLink minggu ini</h5>
                          </div>
                        </Link>
                      </li>
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/siakad/list_mengulang"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Weekly Evaluate</h4>
                            <h5>Evaluasi kegiatan andLink minggu ini</h5>
                          </div>
                        </Link>
                      </li>
                    </ul>
                    <div className="third-level-container"></div>
                  </div>
                </div>
              </li>
              <li className="nav-item">
                <Link
                  className="nav-link"
                  aria-current="page"
                  href="/siakad/home"
                >
                  Daily Plan
                </Link>
              </li>
              <li className="nav-item dropdown">
                <Link
                  className="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Self-Development
                  <span className="dropdown-arrow"></span>
                </Link>
                <div
                  className="dropdown-menu"
                  onmouseleave="noThirdLevel(this)"
                >
                  <div className="wrapper">
                    <h5 className="sub-menu">DI ISI SETIAP HARI</h5>
                    <ul className="item-wrapper">
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/dailysd"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Daily Report</h4>
                            <h5>Laporkan kegiatan andLink hari ini</h5>
                          </div>
                        </Link>
                      </li>
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/siakad/list_mengulang"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Daily Evaluate</h4>
                            <h5>Evaluasi kegiatan andLink hari ini</h5>
                          </div>
                        </Link>
                      </li>
                    </ul>
                    <div className="third-level-container"></div>
                  </div>
                </div>
              </li>
              <li className="nav-item dropdown">
                <Link
                  className="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Bisnis / Profit
                  <span className="dropdown-arrow"></span>
                </Link>
                <div
                  className="dropdown-menu"
                  onmouseleave="noThirdLevel(this)"
                >
                  <div className="wrapper">
                    <h5 className="sub-menu">DI ISI SETIAP HARI</h5>
                    <ul className="item-wrapper">
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/dailybp"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Daily Report</h4>
                            <h5>Laporkan kegiatan andLink hari ini</h5>
                          </div>
                        </Link>
                      </li>
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/siakad/list_mengulang"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Daily Evaluate</h4>
                            <h5>Evaluasi kegiatan andLink hari ini</h5>
                          </div>
                        </Link>
                      </li>
                    </ul>
                    <div className="third-level-container"></div>
                  </div>
                </div>
              </li>
              <li className="nav-item dropdown">
                <Link
                  className="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Kelembagaan
                  <span className="dropdown-arrow"></span>
                </Link>
                <div
                  className="dropdown-menu"
                  onmouseleave="noThirdLevel(this)"
                >
                  <div className="wrapper">
                    <h5 className="sub-menu">DI ISI SETIAP HARI</h5>
                    <ul className="item-wrapper">
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/dailykl"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Daily Report</h4>
                            <h5>Laporkan kegiatan andLink hari ini</h5>
                          </div>
                        </Link>
                      </li>
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/siakad/list_mengulang"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Daily Evaluate</h4>
                            <h5>Evaluasi kegiatan andLink hari ini</h5>
                          </div>
                        </Link>
                      </li>
                    </ul>
                    <div className="third-level-container"></div>
                  </div>
                </div>
              </li>
              <li className="nav-item dropdown">
                <Link
                  className="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Inovasi / Creativity
                  <span className="dropdown-arrow"></span>
                </Link>
                <div
                  className="dropdown-menu"
                  onmouseleave="noThirdLevel(this)"
                >
                  <div className="wrapper">
                    <h5 className="sub-menu">DI ISI SETIAP HARI</h5>
                    <ul className="item-wrapper">
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/dailyic"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Daily Report</h4>
                            <h5>Laporkan kegiatan andLink hari ini</h5>
                          </div>
                        </Link>
                      </li>
                      <li className="three-level">
                        <Link
                          className="dropdown-item"
                          href="/siakad/list_mengulang"
                          onmouseenter="noThirdLevel(this)"
                        >
                          <div className="icon-menu"></div>
                          <div className="text-menu">
                            <h4>Daily Evaluate</h4>
                            <h5>Evaluasi kegiatan andLink hari ini</h5>
                          </div>
                        </Link>
                      </li>
                    </ul>
                    <div className="third-level-container"></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </>
  );
}

export default Navbar;
