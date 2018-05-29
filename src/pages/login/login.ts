import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { CriarContaPage } from '../criar-conta/criar-conta';

@Component({
  selector: 'page-login',
  templateUrl: 'login.html'
})
export class LoginPage {

  constructor(public navCtrl: NavController) {
  }
  goToCriarConta(params){
    if (!params) params = {};
    this.navCtrl.push(CriarContaPage);
  }
}
