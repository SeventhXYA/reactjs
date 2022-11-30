import React from "react";
import { Link } from "react-router-dom";

function Sidebar() {
  return (
    <>
      <div
        id="sidebar-menu"
        className="sidebar modal fade"
        tabindex="-1"
        aria-hidden="true"
      >
        <div className="modal-dialog">
          <div className="modal-content">
            <button
              type="button"
              className="btn closebtn"
              data-bs-dismiss="modal"
            >
              <i className="fa-sharp fa-solid fa-xmark"></i>
            </button>
            <div
              className="accordion accordion-flush mt-4"
              id="accordion-sidebar"
            >
              <div className="accordion-item">
                <h2 className="accordion-header" id="heading-beranda">
                  <Link
                    className="accordion-button collapsed"
                    type="button"
                    id="beranda"
                    href="/"
                  >
                    <p>Beranda</p>
                  </Link>
                </h2>
              </div>
              <div className="accordion-item">
                <h2 className="accordion-header" id="heading-longtermtarget">
                  <Link
                    className="accordion-button collapsed"
                    type="button"
                    id="longtermtarget"
                    href="{{ route('longterm') }}"
                  >
                    <p>Long Term Target</p>
                  </Link>
                </h2>
              </div>
              <div className="accordion-item">
                <h2 className="accordion-header" id="heading-weekly">
                  <Link
                    className="accordion-button collapsed"
                    type="button"
                    id="weekly"
                    href="{{ route('weekly') }}"
                  >
                    <p>Weekly Target</p>
                  </Link>
                </h2>
              </div>
              <div className="accordion-item">
                <h2 className="accordion-header" id="heading-pomodoro">
                  <Link
                    className="accordion-button collapsed"
                    type="button"
                    id="pomodoro"
                    href="{{ route('pomodoro') }}"
                  >
                    <p>Pomodoro Timer</p>
                  </Link>
                </h2>
              </div>
              <div className="accordion-item">
                <h2 className="accordion-header" id="heading-sd">
                  <Link
                    className="accordion-button collapsed"
                    type="button"
                    id="sd"
                    href="{{ route('dailysd') }}"
                  >
                    <p>Self-Development</p>
                  </Link>
                </h2>
              </div>
              <div className="accordion-item">
                <h2 className="accordion-header" id="heading-bp">
                  <Link
                    className="accordion-button collapsed"
                    type="button"
                    id="bp"
                    href="{{ route('dailybp') }}"
                  >
                    <p>Bisnis/Profit</p>
                  </Link>
                </h2>
              </div>
              <div className="accordion-item">
                <h2 className="accordion-header" id="heading-kl">
                  <Link
                    className="accordion-button collapsed"
                    type="button"
                    id="kl"
                    href="{{ route('dailykl') }}"
                  >
                    <p>Kelembagaan</p>
                  </Link>
                </h2>
              </div>
              <div className="accordion-item">
                <h2 className="accordion-header" id="heading-ic">
                  <Link
                    className="accordion-button collapsed"
                    type="button"
                    id="ic"
                    href="{{ route('dailyic') }}"
                  >
                    <p>Inovasi/Creativity</p>
                  </Link>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Sidebar;
