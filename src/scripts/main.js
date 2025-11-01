import { initSlider } from './Swiper.js';
import TabsCollection from './Tabs';
import { showDescription } from "./showDescription.js";

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import '../styles/styles.scss'


new TabsCollection();
initSlider();
showDescription();
