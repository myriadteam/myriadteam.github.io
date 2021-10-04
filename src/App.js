import './App.css';
import Exchanges from './components/Exchanges';
import Landing from './components/Landing';
import Mine from './components/Mine';
import Navigation from './components/Navigation';
import Pools from './components/Pools';
import Wallets from './components/Wallets';
import WhyMyriad from './components/WhyMyriad';
import Resources from './components/Resources';
import Myriad from './components/Myriad';

const App = () => {
  return (
    <div className="App">
      <Navigation/>
      <Landing/>
      <Myriad/>
      <WhyMyriad/>
      <Exchanges/>
      <Wallets/>
      <Mine/>
      <Pools/>
      <Resources/>
    </div>
  )
}

export default App;
