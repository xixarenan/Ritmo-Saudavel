import { Component, ViewChild } from '@angular/core';
import { Platform, Nav } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

import { TreinosBSicosPage } from '../pages/treinos-bsicos/treinos-bsicos';
import { TreinosIntermediRiosPage } from '../pages/treinos-intermedi-rios/treinos-intermedi-rios';
import { TreinosAvanAdosPage } from '../pages/treinos-avan-ados/treinos-avan-ados';
import { MeusTreinosPage } from '../pages/meus-treinos/meus-treinos';
import { ConfiguraEsPage } from '../pages/configura-es/configura-es';
import { SobreOAplicativoPage } from '../pages/sobre-oaplicativo/sobre-oaplicativo';
import { AdicionarDispositivoPage } from '../pages/adicionar-dispositivo/adicionar-dispositivo';


import { TreinosPage } from '../pages/treinos/treinos';



@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  @ViewChild(Nav) navCtrl: Nav;
    rootPage:any = TreinosPage;

  constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen) {
    platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      statusBar.styleDefault();
      splashScreen.hide();
    });
  }
  goToTreinos(params){
    if (!params) params = {};
    this.navCtrl.setRoot(TreinosPage);
  }goToTreinosBSicos(params){
    if (!params) params = {};
    this.navCtrl.setRoot(TreinosBSicosPage);
  }goToTreinosIntermediRios(params){
    if (!params) params = {};
    this.navCtrl.setRoot(TreinosIntermediRiosPage);
  }goToTreinosAvanAdos(params){
    if (!params) params = {};
    this.navCtrl.setRoot(TreinosAvanAdosPage);
  }goToMeusTreinos(params){
    if (!params) params = {};
    this.navCtrl.setRoot(MeusTreinosPage);
  }goToConfiguraEs(params){
    if (!params) params = {};
    this.navCtrl.setRoot(ConfiguraEsPage);
  }goToSobreOAplicativo(params){
    if (!params) params = {};
    this.navCtrl.setRoot(SobreOAplicativoPage);
  }goToAdicionarDispositivo(params){
    if (!params) params = {};
    this.navCtrl.setRoot(AdicionarDispositivoPage);
  }
}
