import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { TreinosPage } from '../treinos/treinos';
import { DietaAlimentosPage } from '../dieta-alimentos/dieta-alimentos';
import { ResumoDaSemanaPage } from '../resumo-da-semana/resumo-da-semana';

@Component({
  selector: 'page-inicio',
  templateUrl: 'inicio.html'
})
export class InicioPage {

  tab1Root: any = TreinosPage;
  tab2Root: any = DietaAlimentosPage;
  tab3Root: any = ResumoDaSemanaPage;
  constructor(public navCtrl: NavController) {
  }
  
}
