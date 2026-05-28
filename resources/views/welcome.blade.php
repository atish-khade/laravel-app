<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, theme-variant=dark"/>
    <title>Enterprise HRMS - Executive Dashboard</title>
    <link href="/dist/tabler.min.css" rel="stylesheet"/>
    <link href="/dist/tabler-vendors.min.css" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root { --tblr-font-sans-serif: 'Inter', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; }
      body { font-feature-settings: "cv02", "cv03", "cv04", "cv11"; }
    </style>
  </head>
  <body class="layout-fluid">
    <div class="page">
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <h1 class="navbar-brand navbar-brand-autodark d-none-sidebar-visible">
            <span style="color: #206bc4; font-weight: 800;">⚡ CORE_HRMS</span>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item">
              <span class="badge bg-green-lt">Infrastructure: Isolated Docker Containers</span>
            </div>
          </div>
        </div>
      </header>
      
      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">Operational Overview</h2>
                <div class="text-muted mt-1">Real-time matrix stats pulled from containerized MySQL instance.</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="bg-primary text-white avatar">💼</span></div>
                      <div class="col">
                        <div class="font-weight-medium">142 Active Staff</div>
                        <div class="text-muted">3 Departments</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="bg-green text-white avatar">⏱️</span></div>
                      <div class="col">
                        <div class="font-weight-medium">98.4% Attendance</div>
                        <div class="text-muted">Shift: Morning Core</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="bg-twitter text-white avatar">🏖️</span></div>
                      <div class="col">
                        <div class="font-weight-medium">12 Pending Leaves</div>
                        <div class="text-muted">Requires HR approval</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="bg-yellow text-white avatar">💵</span></div>
                      <div class="col">
                        <div class="font-weight-medium">₹4,82,000 Payroll</div>
                        <div class="text-muted">Status: Cycle Disbursed</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header"><h3 class="card-title">Corporate Registry & System Meta</h3></div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th>Employee</th>
                          <th>Role</th>
                          <th>Department</th>
                          <th>Employment Status</th>
                          <th>Node IP Access</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Atish Khade</td>
                          <td>Senior DevOps Engineer</td>
                          <td>Infrastructure Engineering</td>
                          <td><span class="badge bg-success text-white">Active / System Admin</span></td>
                          <td><code class="text-primary">172.18.0.3 (App Backend)</code></td>
                        </tr>
                        <tr>
                          <td>Anjali Sharma</td>
                          <td>HR Director</td>
                          <td>Talent Acquisition</td>
                          <td><span class="badge bg-success text-white">Active</span></td>
                          <td><code>172.18.0.1</code></td>
                        </tr>
                        <tr>
                          <td>Rahul Verma</td>
                          <td>Laravel Core Developer</td>
                          <td>Software Delivery</td>
                          <td><span class="badge bg-warning text-white">On Leave</span></td>
                          <td><code>172.18.0.1</code></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card border-primary">
                  <div class="card-status-top bg-primary"></div>
                  <div class="card-body">
                    <h3 class="card-title text-primary">⚙️ Technical Audit Log (For Hiring Managers)</h3>
                    <p>This web interface represents a live decoupled application deployment. Requests hitting this domain undergo the following execution cycle:</p>
                    <ul>
                      <li><strong>Edge Layer:</strong> SSL Termination handled via host automated Let's Encrypt certificates mapped securely to container processes.</li>
                      <li><strong>Web Tier:</strong> Independent Nginx container serving static elements and proxying FastCGI tasks over Port 9000.</li>
                      <li><strong>Application Tier:</strong> Isolated PHP-FPM container managing framework core structures via dynamic execution mounts.</li>
                      <li><strong>Data Tier:</strong> MySQL instance bound exclusively to a non-public backend bridge network layer.</li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="/dist/tabler.min.js" defer></script>
  </body>
</html>
