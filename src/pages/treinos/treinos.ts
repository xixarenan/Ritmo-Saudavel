import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { TreinosBSicosPage } from '../treinos-bsicos/treinos-bsicos';
import { TreinosIntermediRiosPage } from '../treinos-intermedi-rios/treinos-intermedi-rios';
import { TreinosAvanAdosPage } from '../treinos-avan-ados/treinos-avan-ados';
import { MeusTreinosPage } from '../meus-treinos/meus-treinos';

@Component({
  selector: 'page-treinos',
  templateUrl: 'treinos.html'
})
export class TreinosPage {

  constructor(public navCtrl: NavController) {
  }
  goToTreinosBSicos(params){
    if (!params) params = {};
    this.navCtrl.push(TreinosBSicosPage);
  }goToTreinosIntermediRios(params){
    if (!params) params = {};
    this.navCtrl.push(TreinosIntermediRiosPage);
  }goToTreinosAvanAdos(params){
    if (!params) params = {};
    this.navCtrl.push(TreinosAvanAdosPage);
  }goToMeusTreinos(params){
    if (!params) params = {};
    this.navCtrl.push(MeusTreinosPage);
  }
}
