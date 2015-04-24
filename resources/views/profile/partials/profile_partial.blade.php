<aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="{{ asset('img/default-avatar.png')}}" alt="">
                              </a>
                              <h1>{{ $user->getFullName() }}</h1>
                              <p>{{ $user->email }}</p>
                          </div>
                      </section>
                  </aside>