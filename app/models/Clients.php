class Clients extends Eloquent {
    public function transactions() {
      return $this->hasMany('Transaction');
    }

}
