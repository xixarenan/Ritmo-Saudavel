import { NgModule, ErrorHandler } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { IonicApp, IonicModule, IonicErrorHandler } from 'ionic-angular';
import { MyApp } from './app.component';
import { TreinosPage } from '../pages/treinos/treinos';
import { DietaAlimentosPage } from '../pages/dieta-alimentos/dieta-alimentos';
import { ResumoDaSemanaPage } from '../pages/resumo-da-semana/resumo-da-semana';
import { InicioPage } from '../pages/inicio/inicio';
import { LoginPage } from '../pages/login/login';
import { CriarContaPage } from '../pages/criar-conta/criar-conta';
import { ConfiguraEsPage } from '../pages/configura-es/configura-es';
import { SobreOAplicativoPage } from '../pages/sobre-oaplicativo/sobre-oaplicativo';
import { AdicionarDispositivoPage } from '../pages/adicionar-dispositivo/adicionar-dispositivo';
import { TreinosBSicosPage } from '../pages/treinos-bsicos/treinos-bsicos';
import { TreinosIntermediRiosPage } from '../pages/treinos-intermedi-rios/treinos-intermedi-rios';
import { TreinosAvanAdosPage } from '../pages/treinos-avan-ados/treinos-avan-ados';
import { MeusTreinosPage } from '../pages/meus-treinos/meus-treinos';
import { NovoTreinoPage } from '../pages/novo-treino/novo-treino';
import { NovoAlimentoReceitaPage } from '../pages/novo-alimento-receita/novo-alimento-receita';
import { NovaDietaPage } from '../pages/nova-dieta/nova-dieta';


import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

@NgModule({
  declarations: [
    MyApp,
    TreinosPage,
    DietaAlimentosPage,
    ResumoDaSemanaPage,
    InicioPage,
    LoginPage,
    CriarContaPage,
    ConfiguraEsPage,
    SobreOAplicativoPage,
    AdicionarDispositivoPage,
    TreinosBSicosPage,
    TreinosIntermediRiosPage,
    TreinosAvanAdosPage,
    MeusTreinosPage,
    NovoTreinoPage,
    NovoAlimentoReceitaPage,
    NovaDietaPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp)
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    TreinosPage,
    DietaAlimentosPage,
    ResumoDaSemanaPage,
    InicioPage,
    LoginPage,
    CriarContaPage,
    ConfiguraEsPage,
    SobreOAplicativoPage,
    AdicionarDispositivoPage,
    TreinosBSicosPage,
    TreinosIntermediRiosPage,
    TreinosAvanAdosPage,
    MeusTreinosPage,
    NovoTreinoPage,
    NovoAlimentoReceitaPage,
    NovaDietaPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}