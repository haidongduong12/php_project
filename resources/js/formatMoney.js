function formatCurrency($number) {
    $formatted_number = number_format($number, 0, ".", ",");
    return $formatted_number;
}
