export default function currencyEUR(value) {
  return new Intl.NumberFormat('en-EU', { style: 'currency', currency: 'EUR' }).format(value);
}